<?php

namespace App\Models;

use Database\Factories\EnquiryFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'full_name',
    'email',
    'phone',
    'destination',
    'travel_date',
    'travellers',
    'message',
])]
class Enquiry extends Model
{
    /** @use HasFactory<EnquiryFactory> */
    use HasFactory;

    /**
     * Destinations offered on the contact enquiry form.
     *
     * @return list<string>
     */
    public static function destinations(): array
    {
        return [
            'Adi Kailash & Om Parvat',
            'Char Dham Yatra',
            'Haridwar & Rishikesh',
            'Girnar',
            'Himachal Pradesh',
            'Uttarakhand',
            'Maharashtra Hill Stations',
            'Milam Glacier Diaries',
            'Kareri Lake Trek',
            'Khaliya Top Trek',
            'Harishchandragad Trek',
            'Harihar Fort Trek',
            'Munsiyari & Kausani',
            'Dalhousie & Dharamshala',
            'Mount Abu',
            'Dang',
            'Dediapada',
            'Malvan',
            'Sembalpani',
            'Not Sure Yet',
        ];
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'travel_date' => 'date',
            'travellers' => 'integer',
        ];
    }
}
