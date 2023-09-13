<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->judul(),
            'penulis' => $this->faker->penulis(),
            'harga' => $this->faker->randomFloat($format= 2,',', '.'),
            'tgl_terbit' => $this->faker->date($format='d-m-Y'),
        ];
    }
}
