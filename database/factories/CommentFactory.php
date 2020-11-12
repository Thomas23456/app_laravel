<?php

namespace Database\Factories;

use App\Models\{Comment,User,Task};
use Illuminate\Database\Eloquent\Factories\Factory;

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
     * @return array
     */
    public function definition()
    {
        return [
            'text' => $this->faker->paragraph,
			'user_id' => User::factory(),
			'task_id' => Task::factory(),
        ];
    }
}
