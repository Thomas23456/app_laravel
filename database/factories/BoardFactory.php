<?php

namespace Database\Factories;

use App\Models\{Board,User};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory BoardFactory : permet de générer un jeu de données factice de la classe Board
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class BoardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Board::class;

    /**
     * Define the model's default state.
     *
     * @return array : 'id','title','description','user_id','created_at','updated_at'
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(),
			'description' => $this->faker->text(),
			'user_id' => User::factory(),
        ];
    }
}
