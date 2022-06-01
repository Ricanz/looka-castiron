<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->name(),
            'subjudul'=>$this->faker->name(),
            'deskripsi' => $this->faker->name(),
            'gambar'=>'https://source.unsplash.com/random',
            'deskripsi' => $this->faker->paragraph(),
            'status'=>'aktif',
            'tombol_text' => $this->faker->name(),
            'tombol_link' => $this->faker->name(),
        ];
    }
}
