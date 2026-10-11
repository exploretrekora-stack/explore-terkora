<?php

namespace App\Mail;

use App\Models\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InquiryReceived extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public Inquiry $inquiry) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Thank you for your inquiry, '.$this->inquiry->name,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.inquiry-received',
            text: 'mail.inquiry-received-text',
            with: [
                'name' => $this->inquiry->name,
                'phone' => '+91 8460922935',
                'email' => 'exploretrekora@gmail.com',
                'website' => 'https://www.exploretrekora.com/',
            ],
        );
    }
}
