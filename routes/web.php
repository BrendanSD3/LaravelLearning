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
Route::get('/Hello', function () {
    return view('HelloWorld');
});
/* Route::get('/Trello',function(){
    return view('Trello');
}); */
Auth::routes();
Route::get('Admin/Trello', 'HomeController@trello')->name('trello');
Route::get('Admin/home', 'HomeController@index')->name('home');

Route::resource('blogs','BlogController');
Route::resource('products', 'ProductController');
Route::resource('boards','boardcontroller');
Route::post('submit','boardcontroller@save');