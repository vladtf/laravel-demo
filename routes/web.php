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

//Route::get('/hello', function () {
//    return '<h1>Hello World</h1>';
//});

//Route::get('/users/{id}/{name}',function($id, $name){
//    return 'This is user '.$name.' with id : '.$id;
//});

Route::get('/', 'PagesController@index');
Route::get('/about', "PagesController@about");
Route::get('/services', "PagesController@services");

Route::resource('posts', 'PostController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/login/github', 'Auth\LoginController@github');

Route::get('/login/github/redirect', 'Auth\LoginController@githubRedirect');

Route::get('/login/facebook', 'Auth\LoginController@facebook');

Route::get('/login/facebook/redirect', 'Auth\LoginController@facebookRedirect');

