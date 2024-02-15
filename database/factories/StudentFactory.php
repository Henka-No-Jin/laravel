<?php

namespace Database\Factories;

use App\Models\KelasLengkap;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nis' => fake()->randomNumber(5, true),
            'nama' => fake()->firstNameMale(),
            'tanggal_lahir' => fake()->date(),
            'kelas_id' => KelasLengkap::factory(),
            'alamat' => fake()->address(),
        ];

    }
}
