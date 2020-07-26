<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    /** Route vers du Menu */
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/about', 'HomeController@about')->name('about');
    Route::get('/courses','HomeController@courses')->name('courses');
    Route::get('/teachers','HomeController@teachers')->name('teachers');
    Route::get('/contact','HomeController@contact')->name('contact');

    /**Route inscription du visiteur */
    Route::post('/guest','GuestController@store')->name('guest');
    Auth::routes();


    /** Route Administrateur */
    Route::middleware('auth')->group( function() {
        /**Accueil Administrateur */
    Route::get('/home','HomeController@index')->name('home');

        /**Inscription des Etudiants par l'administrateur */
    Route::resource('/etudiant', 'EtudiantController')
            ->name('index','etudiant.index')
            ->name('store','etudiant.store')
            ->name('update','etudiant.update')
            ->name('show','etudiant.show')
            ->name('edit','etudiant.edit')
            ->name('create','etudiant.create')
            ->name('destroy','etudiant.destroy');


}

);
