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

//Route::get('/', function () {
//    return view('welcome');
//});

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//Route::get('/', 'MainController@index')->name('home');
//Route::get('/search', 'MainController@search')->name('search');


Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/search', [MainController::class, 'search'])->name('search');


Route::get('/about', function() {
    return 'about page';
});

