<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTravelStatsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return (bool) session('admin_authenticated');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'happy_travelers' => ['required', 'integer', 'min:0', 'max:10000000'],
            'average_rating' => ['required', 'numeric', 'min:0', 'max:5'],
            'years_of_experience' => ['required', 'integer', 'min:0', 'max:100'],
            'team_members' => ['required', 'integer', 'min:0', 'max:10000'],
            'trips_completed' => ['required', 'integer', 'min:0', 'max:10000000'],
            'verified_reviews' => ['required', 'integer', 'min:0', 'max:10000000'],
        ];
    }

    /**
     * Get the custom validation error messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'happy_travelers.required' => 'The happy travelers count is required.',
            'happy_travelers.integer' => 'Happy travelers must be a whole number.',
            'happy_travelers.min' => 'Happy travelers cannot be negative.',
            'average_rating.required' => 'The average rating is required.',
            'average_rating.numeric' => 'The average rating must be a numeric score.',
            'average_rating.min' => 'The average rating cannot be less than 0.0.',
            'average_rating.max' => 'The average rating cannot exceed 5.0.',
            'years_of_experience.required' => 'Years of experience is required.',
            'years_of_experience.integer' => 'Years of experience must be a whole number.',
            'years_of_experience.min' => 'Years of experience cannot be negative.',
            'years_of_experience.max' => 'Years of experience cannot exceed 100.',
            'team_members.required' => 'Team members count is required.',
            'team_members.integer' => 'Team members must be a whole number.',
            'team_members.min' => 'Team members cannot be negative.',
            'trips_completed.required' => 'Trips completed count is required.',
            'trips_completed.integer' => 'Trips completed must be a whole number.',
            'trips_completed.min' => 'Trips completed cannot be negative.',
            'verified_reviews.required' => 'Verified reviews count is required.',
            'verified_reviews.integer' => 'Verified reviews must be a whole number.',
            'verified_reviews.min' => 'Verified reviews cannot be negative.',
        ];
    }
}
