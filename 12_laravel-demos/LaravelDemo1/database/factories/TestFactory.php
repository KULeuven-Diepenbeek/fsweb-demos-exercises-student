<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'testname' => $this->faker->name,
            'testname' => $this->faker->randomElement(['Mark', 'Tom', 'Kevin']),
            'testemail' => $this->faker->numberBetween(1000, 9999),
            'testnumber' => $this->faker->numberBetween(1000, 9999),
            'testpassword' => bcrypt('password'),
        ];
    }
}
