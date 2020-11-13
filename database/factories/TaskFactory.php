<?php

namespace Database\Factories;

use App\Models\{Task,Category,Board};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory TaskFactory : permet de générer un jeu de données factice de la classe Task
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array : 'id','title','description','due_date','state','board_id','category_id','created_at','updated_at'
     */
    public function definition()
    {
		$state = ['todo','ongoing','done']; //le tableau de l'état de la tâche
        return [
            'title' => $this->faker->title(),
			'description' => $this->faker->text(),
			'due_date' => $this->faker->date(),
			'state' => $this->faker->randomElement($state),
			'board_id' => Board::factory(),
			'category_id' => Category::factory(),
        ];
    }
}
