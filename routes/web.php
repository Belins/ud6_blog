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


Route::get('/admin', 'AdminController@index')->name('admin')->middleware('admin');
Auth::routes(['Verify'=>'true']);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin')->middleware('IsAdmin');

Route::resource('posts','PostController');

Route::resource('roles','RoleController')->middleware('IsAdmin');

Route::get('/roles/addRole/{id}', 'RoleController@addRole')->name('roles.addRole')->middleware('IsAdmin');
Route::post('/roles/{id}/create', 'RoleController@storeRole')->name('roles.storeRole')->middleware('IsAdmin');
Route::get('/roles/editRole/{id}', 'RoleController@editRole')->name('roles.editRole')->middleware('IsAdmin');
Route::post('/roles/{id}/delete', 'RoleController@deleteRole')->name('roles.deleteRole')->middleware('IsAdmin');




