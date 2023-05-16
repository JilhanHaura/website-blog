<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kontak>
 */
class KontakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'namadepan'=>$this->faker->name(),
            'namabelakang'=>$this->faker->name(),
            'email'=>$this->faker->Email(),
            'nomortlp'=>$this->faker->phoneNumber(),
            'subjek'=>$this->faker->text(),
        ];
    }
}
