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
     * Store a validated travel enquiry and email the person who submitted it.
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

        try {
            Mail::to($inquiry->email)->send(new InquiryReceived($inquiry));
        } catch (Throwable $exception) {
            report($exception);
        }

        $whatsappUrl = $inquiry->whatsAppUrl();

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
}
