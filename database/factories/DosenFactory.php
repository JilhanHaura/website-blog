<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip'=>$this->faker->bothify('##########'),
            'nama'=>$this->faker->name(),
            'jenis_kelamin'=>$this->faker->randomelement(['L','P']),
            'status'=>$this->faker->randomelement(['aktif','pasif']),
            'jurusan_id'=>mt_rand(1,2),
            'alamat'=>$this->faker->address(),
        ];
    }
}
