<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Mail\InquiryReceived;
use App\Models\Inquiry;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Throwable;

class EnquiryController extends Controller
{
    /**
     * Store a validated travel enquiry, trigger background email, and return WhatsApp URL instantly.
     */
    public function store(StoreEnquiryRequest $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validated();

        $inquiry = Inquiry::query()->create([
            'name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone'] ?? null,
            'address' => $validated['address'] ?? null,
            'number_of_travellers' => $validated['travellers'] ?? null,
            'destinations' => $validated['destination'],
            'date' => $validated['travel_date'],
            'message' => $validated['message'] ?? null,
        ]);

        $inquiryId = $inquiry->getKey();
        $whatsappUrl = $inquiry->whatsAppUrl();

        // Dispatch email completely in the background so the user is redirected to WhatsApp in milliseconds
        $this->dispatchEmailInBackground($inquiryId);

        if ($request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Enquiry submitted successfully.',
                'whatsapp_url' => $whatsappUrl,
            ]);
        }

        return redirect()
            ->to(route('home', absolute: false).'#contact')
            ->with('enquiry_status', 'received')
            ->with('whatsapp_url', $whatsappUrl);
    }

    /**
     * Dispatches the email asynchronously so the HTTP response is instantaneous.
     */
    protected function dispatchEmailInBackground(int|string $inquiryId): void
    {
        if (app()->runningUnitTests()) {
            $savedInquiry = Inquiry::query()->find($inquiryId);
            if ($savedInquiry instanceof Inquiry) {
                Mail::to($savedInquiry->email)->send(new InquiryReceived($savedInquiry));
            }

            return;
        }

        try {
            $artisan = base_path('artisan');
            $php = PHP_BINARY;

            if (file_exists($artisan) && function_exists('exec')) {
                @exec("{$php} {$artisan} enquiry:send-email {$inquiryId} > /dev/null 2>&1 &");

                return;
            }
        } catch (Throwable) {
            // Fall back to afterResponse closure if background CLI execution fails
        }

        dispatch(function () use ($inquiryId): void {
            $savedInquiry = Inquiry::query()->find($inquiryId);

            if (! $savedInquiry instanceof Inquiry) {
                return;
            }

            try {
                $pendingMail = Mail::to($savedInquiry->email);
                $businessEmail = config('mail.from.address');

                if (is_string($businessEmail)
                    && filter_var($businessEmail, FILTER_VALIDATE_EMAIL)
                    && strcasecmp($businessEmail, $savedInquiry->email) !== 0) {
                    $pendingMail->bcc($businessEmail);
                }

                $pendingMail->send(new InquiryReceived($savedInquiry));
            } catch (Throwable $exception) {
                report($exception);
            }
        })->afterResponse();
    }
}
