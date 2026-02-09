<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


          return [

<<<<<<< .merge_file_39bIJZ
            'name' => $this->faker->company(),
            'adresse' => $this->faker->address(),
            'rating' => $this->faker->numberBetween(1, 5),
            'created_at' => now(),
            'updated_at'=> now(),
=======
            'name' => $this->faker->name(),
            'adresse' => $this->faker->address(),
            'rating' => $this->faker->numberBetween(1, 5),

>>>>>>> .merge_file_sdGbCk
        ];


    }
}
