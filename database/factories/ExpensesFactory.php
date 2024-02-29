<?php

namespace Database\Factories;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ExpensesFactory extends Factory
{
    protected $model = Expense::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'description' => $this->faker->text(),
            'amount' => $this->faker->randomNumber(4),
            'date' => Carbon::now(),
            'user_id' => User::factory()
        ];
    }
}
