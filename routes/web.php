<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PosttController;
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
    return view('auth.login');
});



// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Role Controller

Route::get('/roles', array('as'=> 'admin.roles.index', 'uses' => 'App\Http\Controllers\RoleController@index'));
Route::get('/roles/create', array('as'=> 'admin.roles.create', 'uses' => 'App\Http\Controllers\RoleController@create'));
Route::post('/roles/store', array('as'=> 'admin.roles.store', 'uses' => 'App\Http\Controllers\RoleController@store'));
Route::get('/roles/show/{id}', array('as'=> 'admin.roles.show', 'uses' => 'App\Http\Controllers\RoleController@show'));
Route::get('/roles/edit/{id}', array('as'=> 'admin.roles.edit', 'uses' => 'App\Http\Controllers\RoleController@edit'));
Route::put('/roles/update/{id}', array('as'=> 'admin.roles.update', 'uses' => 'App\Http\Controllers\RoleController@update'));
Route::delete('/roles/destroy/{id}', array('as'=> 'admin.roles.destroy', 'uses' => 'App\Http\Controllers\RoleController@destroy'));



//User Controller
Route::get('/users', array('as'=> 'admin.users.index', 'uses' => 'App\Http\Controllers\UserController@index'));
Route::get('/users/create', array('as'=> 'admin.users.create', 'uses' => 'App\Http\Controllers\UserController@create'));
Route::post('/users/store', array('as'=> 'admin.users.store', 'uses' => 'App\Http\Controllers\UserController@store'));
Route::get('/users/show/{id}', array('as'=> 'admin.users.show', 'uses' => 'App\Http\Controllers\UserController@show'));
Route::get('/users/edit/{id}', array('as'=> 'admin.users.edit', 'uses' => 'App\Http\Controllers\UserController@edit'));
Route::put('/users/update/{id}', array('as'=> 'admin.users.update', 'uses' => 'App\Http\Controllers\UserController@update'));
Route::delete('/users/destroy/{id}', array('as'=> 'admin.users.destroy', 'uses' => 'App\Http\Controllers\UserController@destroy'));


//Proprice Controller 
Route::get('/proprice', array('as'=> 'admin.proprice.index', 'uses' => 'App\Http\Controllers\PropriceController@index'));
Route::get('/proprice/create', array('as'=> 'admin.proprice.create', 'uses' => 'App\Http\Controllers\PropriceController@create'));
Route::post('/proprice/store', array('as'=> 'admin.proprice.store', 'uses' => 'App\Http\Controllers\PropriceController@store'));
Route::get('/proprice/show/{id}', array('as'=> 'admin.proprice.show', 'uses' => 'App\Http\Controllers\PropriceController@show'));
Route::get('/proprice/edit/{id}', array('as'=> 'admin.proprice.edit', 'uses' => 'App\Http\Controllers\PropriceController@edit'));
Route::put('/proprice/update/{id}', array('as'=> 'admin.proprice.update', 'uses' => 'App\Http\Controllers\PropriceController@update'));
Route::delete('/proprice/destroy/{id}', array('as'=> 'admin.proprice.destroy', 'uses' => 'App\Http\Controllers\PropriceController@destroy'));


Route::get('/file-import',[PropriceController::class,'importView'])->name('import-view');
Route::post('/import',[PropriceController::class,'import'])->name('import');
Route::get('/export-users',[PropriceController::class,'exportUsers'])->name('export-users');



//Posts Controller 
Route::get('/posts', array('as'=> 'admin.posts.index', 'uses' => 'App\Http\Controllers\PostController@index'));
Route::get('/posts/create', array('as'=> 'admin.posts.create', 'uses' => 'App\Http\Controllers\PostController@create'));
Route::post('/posts/store', array('as'=> 'admin.posts.store', 'uses' => 'App\Http\Controllers\PostController@store'));
Route::get('/posts/show/{id}', array('as'=> 'admin.posts.show', 'uses' => 'App\Http\Controllers\PostController@show'));
Route::get('/posts/edit/{id}', array('as'=> 'admin.posts.edit', 'uses' => 'App\Http\Controllers\PostController@edit'));
Route::put('/posts/update/{id}', array('as'=> 'admin.posts.update', 'uses' => 'App\Http\Controllers\PostController@update'));
Route::delete('/posts/destroy/{id}', array('as'=> 'admin.posts.destroy', 'uses' => 'App\Http\Controllers\PostController@destroy'));


//Postt Controller
Route::get('postindex', [PosttController::class, 'index'])->name('postindex.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
