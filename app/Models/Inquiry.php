<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'email',
    'phone_number',
    'address',
    'number_of_travellers',
    'destinations',
    'date',
    'message',
])]
class Inquiry extends Model
{
    /**
     * The inquiry records collected from the site forms.
     *
     * @var string
     */
    protected $table = 'inquire-tb';

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'date' => 'date',
            'number_of_travellers' => 'integer',
        ];
    }

    /**
     * Generate the WhatsApp chat URL with pre-filled inquiry details.
     */
    public function whatsAppUrl(): string
    {
        $phone = (string) config('services.whatsapp.number', '918460922935');
        $cleanPhone = preg_replace('/\D/', '', $phone) ?: '918460922935';

        $lines = [
            'Hello Explore Trekora,',
            '',
            'I would like to inquire about a tour package.',
            '',
            'Name: '.$this->name,
            'Email: '.$this->email,
        ];

        if (! empty($this->phone_number)) {
            $lines[] = 'Phone: '.$this->phone_number;
        }

        if (! empty($this->destinations)) {
            $lines[] = 'Destination: '.$this->destinations;
        }

        if (! empty($this->date)) {
            $dateString = $this->date instanceof \DateTimeInterface
                ? $this->date->format('d M Y')
                : (string) $this->date;
            $lines[] = 'Travel Date: '.$dateString;
        }

        if (! empty($this->number_of_travellers)) {
            $lines[] = 'Travellers: '.$this->number_of_travellers;
        }

        if (! empty($this->address)) {
            $lines[] = 'Address: '.$this->address;
        }

        if (! empty($this->message)) {
            $lines[] = 'Message: '.$this->message;
        }

        $lines[] = '';
        $lines[] = 'Please share the package details and availability.';
        $lines[] = 'Thank you.';

        return 'https://wa.me/'.$cleanPhone.'?text='.rawurlencode(implode("\n", $lines));
    }
}
