<?php

namespace Database\Factories;

use App\Models\ObjectModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ObjectModel>
 */
class ObjectModelFactory extends Factory
{
    protected $model = ObjectModel::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'value' => fake()->text(64),
        ];
    }
}
