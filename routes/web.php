<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/post','PostController@index')->name('post.index');
Route::get('/post/create','PostController@create')->name('post.create');
Route::post('/post','PostController@store')->name('post.store');
Route::get('/post/{post}','PostController@show')->name('post.show');
Route::delete('/post/{post}','PostController@destroy')->name('post.delete');
Route::get('/post/{post}/edit','PostController@edit')->name('post.edit');
Route::put('/post/{post}','PostController@update')->name('post.update');

Route::get('/post-category/{category}','PostController@postWithCategory')->name('post.category');

Route::resource('/category','CategoryController');



Auth::routes();

//自訂logout
Route::get('/logout','App\Http\Controllers\Auth\LoginController@logout')->name('logout');
// Route::get('/logout',function(){
//     Auth::logout();
//     return view('logout');
// })->name('logout');

Route::get('/logout/success',function(){
    return view('logout');
})->name('logout.success');

Route::get('/home', 'HomeController@index')->name('home');
