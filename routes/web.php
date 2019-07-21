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
    return view('welcome');
});

Route::get('/search', function () {
    return view('search');
});


Auth::routes();

Route::view('/register', function() {
    abort(404);
});

Route::get('/home', 'HomeController@index')->name('check-dashboard');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('dashboard', 'DashboardController')->names(['index' => 'admin.dashboard']);
    Route::resource('user', 'UserController');
    Route::resource('permission', 'PermissionController');
    Route::resource('role', 'RoleController');
});

Route::group(['prefix' => 'loket', 'middleware' => 'role:Loket|Superadmin'], function () {
    Route::resource('dashboard', 'Loket/DashboardController')->names(['index' => 'loket.dashboard']);
    Route::resource('permohonan', 'PermohonanController');
});
