<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Laravel\Jetstream\Features;

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
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'presentation' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'slug' => $this->faker->word(),
            'title_job' => $this->faker->text,
            'link_facebook' => $this->faker->text,
            'link_instagram' => $this->faker->text,
            'link_github' => $this->faker->text,
            'link_linkedin' => $this->faker->text,
            'about_me' => $this->faker->text,
            'tel' => '+541134436758',
            'address' => $this->faker->address,
            'excerpt' => $this->faker->text,
            'email_verified_at' => now(),
            'password' => '$2a$04$b/r1qCIaN86MluqsPrvGHOY9K76hoiHtF18NH5X3aqmGvuOABZgaC', // password 1234
            'remember_token' => Str::random(10),
            'titulo_about_me' => 'About me',
            'titulo_what_i_do' => 'What I do',
            'titulo_skills' => 'Skills',
            'titulo_professional_skills' => 'Professional skills',

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the user should have a personal team.
     *
     * @return $this
     */
    public function withPersonalTeam()
    {
        if (! Features::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, User $user) {
                    return ['name' => $user->name.'\'s Team', 'user_id' => $user->id, 'personal_team' => true];
                }),
            'ownedTeams'
        );
    }
}
