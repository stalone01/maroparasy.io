<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
        /**
     * Define the model's default state.
     *
     * @var string
     */
    protected $modele = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username'=>$this->faker->sentence,
            'msg'=>$this->faker->paragraph,
            'created_at'=> now()
        ];
    }
}
