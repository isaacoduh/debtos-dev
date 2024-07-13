<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Debt>
 */
class DebtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => function () {
                return Client::factory()->create()->id;
            },
            'user_id' => function () {
                return User::factory()->state(['role' => 'agent'])->create()->id;
            },
            'amount' => fake()->randomFloat(2, 100, 10000),
            'status' => fake()->randomElement(['paid', 'overdue', 'in_process']),
            'due_date' => fake()->dateTimeBetween('-1 years', '+1 years'),
        ];
    }
}
