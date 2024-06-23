<?php

namespace Database\Factories;

use App\Models\Divisi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'nip' => $this->faker->unique()->numerify(str_repeat('#', 18)),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'no_telepon' => $this->faker->unique()->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'alamat' => $this->faker->address,
            'marital_status' => $this->faker->randomElement(['Belum Menikah', 'Menikah', 'Janda', 'Duda']),
            'education' => $this->faker->randomElement(['SMA', 'D3', 'S1', 'S2', 'S3']),
            'divisi_id' => $this->faker->numberBetween(1, 10),
            'sallary' => $this->faker->numberBetween(3000000, 20000000),
            'foto' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
        ];
    }
}
