<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('presentation')->nullable();;
            $table->string('slug')->unique()->nullable();
            $table->string('image')->nullable();
            $table->string('title_job')->nullable();
            $table->string('about_me')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('tel')->nullable();
            $table->string('address')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('image_about_me')->nullable();
            $table->string('link_facebook')->nullable();
            $table->string('link_instagram')->nullable();
            $table->string('link_github')->nullable();
            $table->string('link_linkedin')->nullable();
            $table->string('titulo_about_me')->nullable();;
            $table->string('titulo_what_i_do')->nullable();;
            $table->string('titulo_skills')->nullable();;
            $table->string('titulo_professional_skills')->nullable();;
  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
