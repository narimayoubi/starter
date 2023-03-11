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
/*i put this na*/
// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test1', function () {
//     return 'naroooo';
// });

// Route::namespace('Front')->group(function() {
//    //all route only acces controller or methods in folder name fromt i add controller folder front
//    Route::get('users','');
// });

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::get('/',function(){
return 'Home';
});


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
