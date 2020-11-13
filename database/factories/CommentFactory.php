<?php

namespace Database\Factories;

use App\Models\{Comment,User,Task};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory CommentFactory : permet de générer un jeu de données factice de la classe Comment
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array : 'id','text','user_id','task_id','created_at','updated_at'
     */
    public function definition()
    {
        return [
            'text' => $this->faker->text(),
			'user_id' => User::factory(),
			'task_id' => Task::factory(),
        ];
    }
}
