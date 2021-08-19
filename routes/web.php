<?php

use App\Http\Controllers\MainController;
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

Route::get('/', 'MainController@index')->name('index');
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/actualites', 'MainController@actu')->name('actu');
Route::get('/apropos', 'MainController@about')->name('about');
Route::get('/contact', 'MainController@contact')->name('contact');
Route::get('/adopter', 'MainController@adopter')->name('adopter');
Route::get('/adopter/{id}', 'MainController@chien')->name('chien');
Route::post('/contact-send', 'MainController@contactsend');
Route::get('/parametres', 'MainController@parametres')->name('parametres');
Route::post('/param-send', 'MainController@addparam');