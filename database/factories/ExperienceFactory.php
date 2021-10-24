<?php

namespace Database\Factories;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExperienceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experience::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'work_name' => $this->faker->name,
            'enterprice' => $this->faker->name,
            'start_date' => $this->faker->date,
            'finish_date' => $this->faker->date,
            'responsabilitys' => $this->faker->text,
            'user_id'     => rand(1,2),
        ];
    }
}
