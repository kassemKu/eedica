<?php

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

// Route::get('/', function () {
//     return view('client.welcome');
// });

Route::get('/', 'WelcomeController@frontPage');

Auth::routes();

Route::prefix('manage')
    ->middleware('role:superadministrator|administrator|editor|author|contributor|teacher')
    ->group(function () {
        Route::get('/', 'Manage\ManageController@index');
        Route::get('/dashboard', 'Manage\ManageController@dashboard')
            ->name('manage.dashboard');
        Route::resource('/users', 'Manage\UsersController');
        Route::resource('/roles', 'Manage\RolesController');

        Route::resource('/courses', 'Manage\CoursesController');
        
        // Route::resource('/lessons', 'Manage\LessonsController');
        // Route::get('/lesson/{slug}', 'Manage\LessonsController@show')->name('lesson.show');
});

Route::resource('profile', 'Auth\ProfileController');

Route::get('/home', 'HomeController@index')->name('home');

