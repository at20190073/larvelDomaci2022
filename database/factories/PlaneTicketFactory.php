<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\aircraftClass;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\planeTicket>
 */
class PlaneTicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'From' => $this->faker->name(),
            'To' => $this->faker->name(),
            'Departure' => $this->faker->date(),
            'Return' => $this->faker->date(),
            'Type' => $this->faker->name(),
            'Baggage' => $this->faker->boolean(),
            'UserID' => User::factory(),
            'Class' => aircraftClass::factory(),
            'Price' => $this->faker->numberBetween(100,600),

             

        ];
    }
}
