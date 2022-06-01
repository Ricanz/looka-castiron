<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
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
            'foto'=>'https://source.unsplash.com/random',
            'instansi' => $this->faker->name(),
            'deskripsi' => $this->faker->paragraph(),
            'rating' => $this->faker->randomDigitNot(5),
            'status'=>'aktif',
        ];
    }
}
