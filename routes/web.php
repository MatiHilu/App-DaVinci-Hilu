<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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


Route::get('hola', function() {
   // $Users = User::get()->all();
    $Users = User::where('name', 'Garnett Torp')->get();
    dd($Users);
    return view('hola');

});

Route::get('adios', function() {

    return view('adios');

});

Route::view('/', 'welcome');

Route::get('/hola/{name}', function($name) {

    return '<h1> Hola '.$name.'</h1>';

});

Route::get('portfolio', function(){

    $user = User::with('skill')->with('education')->with('rrss')->with('whatido')->with('projects')->with('professional')->with('experience')->with('blog')->latest()->get();
    //$skill = Skill::latest()->get();

    //dd($user);


    return view('portfolio')->with('user', $user[0]);
    // return view('portfolio', compact('user', 'skill'));

});

/* Route::view('/portfolio', function($Users) {
    $Users = User::get()->all();
    dd($Users);
}); */


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
