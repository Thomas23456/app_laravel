<?php

namespace Database\Factories;

use App\Models\{BoardUser,User,Board};
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory BoardUserFactory : permet de générer un jeu de données factice de la classe BoardUser
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class BoardUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoardUser::class;

    /**
     * Define the model's default state.
     *
     * @return array : 'id','user_id','board_id','created_at','updated_at'
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
			'board_id' => Board::factory(),
        ];
    }
}
