<?php

use App\Models\Skill;
use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfessionalController;
use App\Http\Controllers\WhatidoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function() {

//     return view('welcome');

// });

/*
Route::get('hola', function() {
   // $Users = User::get()->all();
    $Users = User::where('name', 'Garnett Torp')->get();
    dd($Users);
    return view('hola');

});

Route::get('adios', function() {

    return view('adios');

});
*/
Route::view('/', 'welcome');
/*
Route::get('/hola/{name}', function($name) {

    return '<h1> Hola '.$name.'</h1>';

});*/

Route::get('portfolio/{slug}', function($slug){

    $user = User::where('id', Auth::user()->id)->with('skill')->with('education')->with('rrss')->with('whatido')->with('projects')->with('professional')->with('experience')->with('blog')->get();
    //$user = User::with('skill')->with('education')->with('rrss')->with('whatido')->with('projects')->with('professional')->with('experience')->with('blog')->latest()->get();
    //$skill = Skill::latest()->get();

    //dd($user);

//dd($user);  $user = User::where('id', Auth::user()->id)->with
    return view('portfolio')->with('user', $user[0]);
    // return view('portfolio', compact('user', 'skill'));

});

Route::get('logout-user', UserController::class.'@logout_user')->name('logout-user');
/*
Route::resource('user', UserController::class)->except([
    'show'
]);

Route::resource('skill', SkillController::class)->except([
    'show'
]);*/
/* Route::view('/portfolio', function($Users) {
    $Users = User::get()->all();
    dd($Users);
}); */


/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');*/

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
Route::group(['middleware' => ['role:admin']], function() {

        Route::get('/dashboard', function(){
            return view('admin.dashboard');

        })->name('dashboard');

        Route::resource('user', UserController::class)->except([
            'show'
        ]);

        Route::resource('skill', SkillController::class)->except([
            'show'
        ]);

    });


    Route::group(['middleware' => ['role:client']], function() {

        Route::get('my-portfolio', UserController::class.'@my_portfolio')->name('my-portfolio');

        //Usuario
        Route::get('my-portfolio-edit', UserController::class.'@my_portfolio_edit')->name('my-portfolio-edit');
        //Route::get('client.user.index', UserController::class.'@my_portfolio')->name('client.user.index');
        Route::put('updateClient', UserController::class.'@updateClient')->name('updateClient');
        Route::put('update', UserController::class.'@update')->name('update');

        // Skills
        Route::put('updateSkillClient', SkillController::class.'@updateClient')->name('updateSkillClient');
        Route::post('newSkill', SkillController::class.'@storeClient')->name('newSkill');
        Route::delete('deleteSkill', SkillController::class.'@destroyClient')->name('deleteSkill');
/*
        //Educacion
        Route::put('updateEducationClient', EducationController::class.'@updateClient')->name('updateEducationClient');
        Route::post('newEducation', EducationController::class.'@storeClient')->name('newEducation');
        Route::delete('deleteEducation', EducationController::class.'@destroyClient')->name('deleteEducation');

        //Rrss
        Route::put('updateRrssClient', RrssController::class.'@updateClient')->name('updateRrssClient');
        Route::post('newRrss', RrssController::class.'@storeClient')->name('newRrss');
        Route::delete('deleteRrss', RrssController::class.'@destroyClient')->name('deleteRrss');
*/
        //Whatido
        Route::put('updateWhatidoClient', WhatidoController::class.'@updateClient')->name('updateWhatidoClient');
        Route::post('newWhatido', WhatidoController::class.'@storeClient')->name('newWhatido');
        Route::delete('deleteWhatido', WhatidoController::class.'@destroyClient')->name('deleteWhatido');

        //professional
        Route::put('updateProfessionalClient', ProfessionalController::class.'@updateClient')->name('updateProfessionalClient');
        Route::post('newProfessional', ProfessionalController::class.'@storeClient')->name('newProfessional');
        Route::delete('deleteProfessional', ProfessionalController::class.'@destroyClient')->name('deleteProfessional');
/*
        //experience
        Route::put('updateExperienceClient', ExperienceController::class.'@updateClient')->name('updateExperienceClient');
        Route::post('newExperience', ExperienceController::class.'@storeClient')->name('newExperience');
        Route::delete('deleteExperience', ExperienceController::class.'@destroyClient')->name('deleteExperience');
*/



        

    });





});