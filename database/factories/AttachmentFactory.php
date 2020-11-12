<?php

namespace Database\Factories;

use App\Models\{Attachment,User,Task};
use Illuminate\Database\Eloquent\Factories\Factory;

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
     * @return array
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
