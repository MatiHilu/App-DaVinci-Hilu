<?php

namespace Database\Factories;

use App\Models\Projects;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Projects::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'project_title' => $this->faker->text,
            'project_subtitle' => $this->faker->text,
            'project_theme' => $this->faker->text,
            'description' => $this->faker->sentence,
            'view_more_link' => $this->faker->text,
            'quote' => $this->faker->text,
            'quote_cite' => $this->faker->word,
            'user_id'     => rand(1,2),
        ];
    }
}
