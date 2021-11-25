<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'quantity' => $this->faker->randomDigit,
            'user_id' => $this->faker->numberBetween(1, User::count()),
            'company_id' => $this->faker->numberBetween(1, Company::count()),
        ];
    }
}
