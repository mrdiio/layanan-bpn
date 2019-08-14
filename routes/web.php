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
Route::get('/', 'WelcomeController@index');

Route::get('cari', 'SearchController@search');


Auth::routes();

Route::view('/register', function() {
    abort(404);
});

Route::get('/home', 'HomeController@index')->name('check-dashboard');

Route::get('permohonan/{permohonan}', 'PermohonanController@lihat')->name('permohonan');

Route::post('getPdf', 'PermohonanController@pdf')->name('pdf');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('dashboard', 'UserController')->names(['index' => 'admin.dashboard']);
    Route::resource('user', 'UserController');
    Route::resource('permission', 'PermissionController');
    Route::resource('role', 'RoleController');
});

Route::group(['prefix' => 'loket', 'middleware' => 'role:Loket|Superadmin', 'as' => 'loket.'], function () {
    Route::resource('dashboard', 'loket\DashboardController');
    Route::resource('permohonan', 'PermohonanController');
    Route::resource('pemohon', 'Loket\PemohonController');
    Route::resource('tanah', 'Loket\TanahController');
});

Route::group(['prefix' => 'ip', 'middleware' => 'role:IP|Superadmin','as' => 'ip.'], function () {
    Route::resource('dashboard', 'IP\DashboardController');
    Route::resource('permohonan', 'IPController');
});

Route::group(['prefix' => 'p2', 'middleware' => 'role:P2|Superadmin','as' => 'p2.'], function () {
    Route::resource('dashboard', 'P2\DashboardController');
    Route::resource('permohonan', 'P2Controller');
});

Route::group(['prefix' => 'hhp', 'middleware' => 'role:HHP|Superadmin','as' => 'hhp.'], function () {
    Route::resource('dashboard', 'HHP\DashboardController');
    Route::resource('permohonan', 'HHPController');
});