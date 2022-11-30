<?php

use App\Game;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/browse', 'HomeController@browse')->name('browse');
Route::get('/details', 'HomeController@details')->name('details');
Route::get('/streams', 'LiveController@index')->name('streams.index');
Route::get('/proflie', 'HomeController@profile')->name('proflie');



Route::get('/details/{game}', 'GameController@show' )->name('game.show');