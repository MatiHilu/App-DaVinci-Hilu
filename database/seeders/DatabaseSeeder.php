<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Skill;
use App\Models\Rrss;
use App\Models\Education;
use App\Models\Whatido;
use App\Models\Projects;
use App\Models\Professional;
use App\Models\Experience;
use App\Models\Blog;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::factory(5)->create()->each(function ($user) {
            $user->assignRole('client');
        });
        Skill::factory(20)->create();
        Education::factory(10)->create();
        Rrss::factory(8)->create();
        Whatido::factory(6)->create();
        Projects::factory(6)->create();
        Professional::factory(8)->create();
        Experience::factory(6)->create();
        Blog::factory(6)->create();
    }
}
