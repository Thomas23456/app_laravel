<?php

namespace Database\Factories;

use App\Models\{TaskUser,Task,User};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory TaskUserFactory : permet de générer un jeu de données factice de la classe TaskUser
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class TaskUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TaskUser::class;

    /**
     * Define the model's default state.
     *
     * @return array : 'id','user_id','task_id','created_at','updated_at'
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
			'task_id' => Task::factory(),
        ];
    }
}
