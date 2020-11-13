<?php

namespace Database\Factories;

use App\Models\{Attachment,User,Task};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory AttachmentFactory : permet de générer un jeu de données factice de la classe Factory
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array : 'id','file','filename','size','type','user_id','task_id','created_at','updated_at'
     */
    public function definition()
    {
        return [
            'file' => $this->faker->word(),
			'filename' => $this->faker->word(),
			'size' => $this->faker->randomNumber(),
			'type' => $this->faker->word(),
			'user_id' => User::factory(),
			'task_id' => Task::factory(),
        ];
    }
}
