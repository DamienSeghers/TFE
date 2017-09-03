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

Route::get('/', function () {
    return view('auth/login');
});

  /*   Info Générale
  |
  |   - Json de reset password : redirection avec '../'     => public\assets\js\custom_js\forgot_password.js
  |   - Rename obligatoire, pourquoi ? ça je ne sais pas...
  |   
  |
  */
// vendor\laravel\framework\src\Illuminate\Routing\router.php => 994
// login - logout - register - password(all)
Auth::routes();

Route::group(['middleware' => 'customer'], function () {
    
    // vendor\laravel\framework\src\Illuminate\Routing\router.php => 994
    // login - logout - register - password(all)
    
    Route::get('/home', 'CustomerController@index')->name('index');
    //modification de l'utilisateur
    Route::get('/user_edit', 'CustomerController@user_edit')->name('user_edit');

    //voir le porfile de l'utilisateur
    Route::get('/user_view', 'CustomerController@user_view')->name('user_view');
    //Route::post('/user_view', 'HomeController@user_view_update_avatar')->name('user_view_update_avatar');

});

Route::group(['middleware' => 'auth'], function () {
    
    Route::get('/home', 'HomeController@index')->name('index');

    //modification de l'utilisateur
    Route::get('/user_edit', 'HomeController@user_edit')->name('user_edit');

    //voir le porfile de l'utilisateur
    Route::get('/user_view', 'HomeController@user_view')->name('user_view');
    //Route::post('/user_view', 'HomeController@user_view_update_avatar')->name('user_view_update_avatar');


    //voir la listes des utilisateurs
    Route::get('/user_list', 'UserController@user_list')->name('user_list');

    //Windows + L hm hm hm
    //   /!\ info /!\ changement du path dans le jquery pour le rename de la page home
    Route::get('/lockscreen', 'LockController@lockscreen')->name('lockscreen');
    Route::post('/lockscreen', 'LockController@CheckLockscreen')->name('lockscreen');

    Route::resource('user', 'UserController');

    Route::get('/datatables', 'HomeController@datatables')->name('datatables');
    Route::get('/datatables1', 'HomeController@datatables1')->name('datatables1');
    Route::get('/datatables2', 'HomeController@datatables2')->name('datatables2');
    Route::get('/datatables3', 'HomeController@datatables3')->name('datatables3');

    Route::delete('/Error', 'HomeController@ErrorDestroy')->name('erreur.destroy');

});