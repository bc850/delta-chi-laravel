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

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', 'PagesController@index');

# Pages
Route::get('/values', 'PagesController@values');
Route::get('/local-history', 'PagesController@localHistory');
Route::get('/scholarship', 'PagesController@scholarship');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
#    Route::resource('posts', 'PostsController');
  Route::get('posts', 'DashboardController@postsIndex')->name('dashboard/posts');
});
