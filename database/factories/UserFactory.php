<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory UserFactory : permet de générer un jeu de données factice de la classe User
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array : : 'name','email','email_verified_at','password','remember_token','created_at','updated_at'
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byM', // password
            'remember_token' => $this->faker->name(),
        ];
    }
}
