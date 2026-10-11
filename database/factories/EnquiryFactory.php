<?php

namespace Database\Factories;

use App\Models\Enquiry;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Enquiry>
 */
class EnquiryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone' => '8460922935',
            'destination' => 'Girnar',
            'travel_date' => now()->addWeek()->toDateString(),
            'travellers' => 2,
            'message' => fake()->sentence(),
        ];
    }
}
