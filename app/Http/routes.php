<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use EloquentORM\User;
Route::get('/crear', function () {
     $user = User::create([
        'name' => 'Lynda Morales',
        'email' => 'l@italomoralesf.com',
        'password' => bcrypt('123456'),
        'gender' => 'f',
        'biography' => 'Alumna de PHP'
    ]);
    
    return 'Usuario Guardado';
});

Route::get('/update-user', function () {
    
    $user = User::find(1);
    
    $user->gender = 'm';
    $user->biography = 'Profesor de Programación';
    
    $user->save();
    
    return 'Usuario Actualizado';
    
});



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
