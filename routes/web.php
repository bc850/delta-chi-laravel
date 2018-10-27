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
Route::get('/about/values', 'PagesController@values');
Route::get('/about/local-history', 'PagesController@localHistory');
Route::get('/about/scholarship', 'PagesController@scholarship');
Route::get('/about/campus-involvement', 'PagesController@campusInvolvement');
Route::get('/philanthropy/josh-dykes-memorial-golf-tournament', 'PagesController@joshDykes');
Route::get('/philanthropy/the-v-foundation', 'PagesController@theVFoundation');

Route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
#    Route::resource('posts', 'PostsController');
  Route::get('posts', 'DashboardController@postsIndex')->name('dashboard/posts');
});
