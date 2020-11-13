<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory CategoryFactory : permet de générer un jeu de données factice de la classe Category
 *
 * @author : Thomas Payan
 * @version 1.0
 */
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array : 'id','name','created_at','updated_at'
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
        ];
    }
}
