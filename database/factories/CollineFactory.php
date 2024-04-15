<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Colline>
 */
class CollineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path'=>$this->faker->file,
            'titre'=>$this->faker->text,
            'contenu'=>$this->faker->paragraph,
            'petit-titre'=>$this->faker->text,
            'prix'=>$this->random_int(0,20),
            'created_at'=> now()
        ];

    }
}
