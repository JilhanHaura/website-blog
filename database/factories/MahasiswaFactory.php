<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nim'=>$this->faker->bothify('##########'),
            'nama'=>$this->faker->name(),
            'jenis_kelamin'=>$this->faker->randomelement(['L','P']),
            'jurusan_id'=>mt_rand(1,2),
            'prestasi_id'=>mt_rand(1,5),
            'angkatan'=>$this->faker->year(),
            'alamat'=>$this->faker->address(),
        ];
    }
}
