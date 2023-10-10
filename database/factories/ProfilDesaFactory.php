<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profilDesa>
 */
class ProfilDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kategori'=>$this->faker->randomElement(['1', '2', '3', '4', '5', '6']),
            'body'=>$this->faker->paragraph(mt_rand(80, 100)),
        ];
    }
}
