<?php

namespace App\Http\Requests;

use App\Models\Enquiry;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEnquiryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Normalize the phone number before the rules run.
     */
    protected function prepareForValidation(): void
    {
        if (! $this->filled('phone')) {
            return;
        }

        $this->merge([
            'phone' => preg_replace('/[^\d+]/', '', (string) $this->string('phone')),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'regex:/^(?:\+91)?[6-9]\d{9}$/'],
            'address' => ['nullable', 'string', 'max:255'],
            'destination' => ['required', 'string', Rule::in(Enquiry::destinations())],
            'travel_date' => ['required', 'date', 'after_or_equal:today'],
            'travellers' => ['nullable', 'integer', 'min:1', 'max:50'],
            'message' => ['nullable', 'string', 'max:2000'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'phone.regex' => 'Enter a valid 10-digit Indian mobile number.',
            'destination.in' => 'Choose a destination from the list.',
            'travel_date.after_or_equal' => 'Choose today or a future travel date.',
            'travellers.min' => 'Enter at least 1 traveller.',
            'travellers.max' => 'Enter 50 travellers or fewer.',
        ];
    }

    /**
     * Keep validation errors on the contact section.
     */
    protected function getRedirectUrl(): string
    {
        return route('home', absolute: false).'#contact';
    }
}
