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
    public function definition(): array
    {
        return [
            'judul' => fake('id_ID')->word(),
            'penulis' => fake('id_ID')->name(),
            'penerbit' => fake('id_ID')->company(),
            'tahun_terbit' => fake('id_ID')->year(),
        ];
    }
}
