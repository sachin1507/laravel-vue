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

Route::get('auth/linkedin', 'AuthController@redirectToLinkedin');
Route::get('auth/linkedin/callback', 'AuthController@handleLinkedinCallback');


//Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// Route to handle page reload in Vue except for api routes
//Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/{any?}', function (){
    return view('welcome');
})->where('any', '^(?!api\/)[\/\w\.-]*');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
