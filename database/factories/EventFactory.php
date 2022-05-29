<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'event_date' => $this->faker->date('Y-m-d'),
            'price' => $this->faker->randomFloat(2, 0, 10000),
            'is_confirmed' => $this->faker->boolean(50),
            'is_realized' => $this->faker->boolean(50),
            'user_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
        ];
    }
}
