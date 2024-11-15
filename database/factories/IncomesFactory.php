<?php

namespace Database\Factories;

use App\Models\Incomes;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incomes>
 */
class IncomesFactory extends Factory
{

    /**
    * The name of the factory's corresponding model.
    *
    * @var object
    */
    protected $model = Incomes::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                   
        ];
    }
}
