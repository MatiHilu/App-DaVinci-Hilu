<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'presentation',
        'slug',
        'title_job',
        'email',
        'password',
        'image',
        'tel',
        'address',
        'image_about_me',
        'link_facebook',
        'link_linkedin',
        'link_github',
        'link_instagram',
        'titulo_about_me',
        'about_me',
        'titulo_what_i_do',
        'titulo_skills',
        'titulo_professional_skills',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function skill()
    {
        return $this->hasMany(Skill::class, 'user_id', 'id');
    }

    public function education()
    {
        return $this->hasMany(Education::class, 'user_id', 'id');
    }

    public function rrss()
    {
        return $this->hasMany(Rrss::class, 'user_id', 'id');
    }

    public function whatido()
    {
        return $this->hasMany(Whatido::class, 'user_id', 'id');
    }

    public function projects()
    {
        return $this->hasMany(Projects::class, 'user_id', 'id');
    }

    public function professional()
    {
        return $this->hasMany(Professional::class, 'user_id', 'id');
    }

    public function experience()
    {
        return $this->hasMany(Experience::class, 'user_id', 'id');
    }

    public function blog()
    {
        return $this->hasMany(Blog::class, 'user_id', 'id');
    }
    
    public function getGetImageAttribute($key){
        if($this->image){
            return url("storage/$this->image");
        }
    }

    public function getGetImage2Attribute($key){
        if($this->image_about_me){
            return url("storage/$this->image_about_me");
        }
    }

    public function getUppercaseAttribute($key){

        return strtoupper($this->name);

    }
}
