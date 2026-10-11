<?php

namespace App\Console\Commands;

use App\Mail\InquiryReceived;
use App\Models\Inquiry;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Throwable;

class SendEnquiryEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'enquiry:send-email {id : The ID of the inquiry}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send confirmation and admin notification email for an inquiry in background';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $id = $this->argument('id');
        $inquiry = Inquiry::query()->find($id);

        if (! $inquiry instanceof Inquiry) {
            $this->error("Inquiry with ID {$id} not found.");

            return Command::FAILURE;
        }

        try {
            $pendingMail = Mail::to($inquiry->email);
            $businessEmail = config('mail.from.address');

            if (is_string($businessEmail)
                && filter_var($businessEmail, FILTER_VALIDATE_EMAIL)
                && strcasecmp($businessEmail, $inquiry->email) !== 0) {
                $pendingMail->bcc($businessEmail);
            }

            $pendingMail->send(new InquiryReceived($inquiry));
            $this->info("Email sent successfully for inquiry {$id}.");

            return Command::SUCCESS;
        } catch (Throwable $e) {
            report($e);
            $this->error("Failed to send email: {$e->getMessage()}");

            return Command::FAILURE;
        }
    }
}
