<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'roomID' => fake()->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt'),
            'roomDescription' => fake()->catchPhrase(),
            'roomCapacity'=> fake() -> biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'dateFrom' => fake()->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'dateTo' => fake()->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        ];
    }
}
