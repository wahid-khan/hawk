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
/*
Route::get('/about', function () {
    return view('pages.about');
 });
Route::get('/about', function () {
    return view('pages.about');
});
 */
Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('/hawk', 'PagesController@hawk');

Route::get('/kds', 'KDSController@index');

Route::get('/kds/register', 'KDSController@secondindex');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');


Route::get('/pay', 'PayOrderController@store');