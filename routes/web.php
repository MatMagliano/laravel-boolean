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

// Route::get('/', function () {
//     return view('welcome');
// });

// STATIC_PAGE
Route::get('/', 'StaticPageController@index')->name('static_page.home');

Route::get('/privacy', 'StaticPageController@privacy')->name('static_page.privacy');

Route::get('/domande-frequenti', 'StaticPageController@faq')->name('static_page.faq');


//STUDENDS
Route::get('/students', 'StudentsController@index')->name('students.index');
Route::get('/students/show/{id}', 'StudentsController@show')->name('students.show');