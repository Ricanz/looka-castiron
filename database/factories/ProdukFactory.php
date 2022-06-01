<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'harga'=>$this->faker->randomDigit(),
            'kategori_id' => $this->faker->name(),
            'gambar'=>'https://source.unsplash.com/random',
            'slug' => $this->faker->name(),
            'status'=>'aktif',
            'deskripsi' => $this->faker->paragraph(),
            'shopee_link' => $this->faker->name(),
            'tokopedia_link' => $this->faker->name(),
            'lazada_link' => $this->faker->name(),
        ];
    }
}
