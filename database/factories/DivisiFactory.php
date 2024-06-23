<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Divisi>
 */
class DivisiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $divisiNames = [
            'Produksi', 'Keuangan', 'SDM', 'Marketing', 'IT', 'Kreatif', 'Logistik', 'Riset dan Pengembangan', 'Pelayanan Pelanggan', 'Penjualan'
        ];

        return [
            'divisi' => $this->faker->unique()->randomElement($divisiNames),
            'description' => $this->faker->sentence,
        ];
    }
}
