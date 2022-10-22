<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Baju>
 */
class BajuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tipe' => $this->faker->numberBetween(1,3),
            'ukuran' => $this->faker->randomElement($array = array('S','M','L','XL','XXL')),
            'warna' => $this->faker->colorName(),
            'jumlah' => $this->faker->numberBetween(1,100),
        ];
    }
}
