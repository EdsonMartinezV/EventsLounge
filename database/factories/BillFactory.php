<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bill>
 */
class BillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'concept' => $this->faker->word,
            'amount' => $this->faker->randomFloat(2, 0, 10000),
            'date' => $this->faker->date('Y-m-d', 'now'),
            'event_id' => Event::all()->random()->id
        ];
    }
}
 