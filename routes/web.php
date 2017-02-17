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

//original welcome page
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::get('about', function () {
    $info = ['This','is','a','message','from','the','route'];
    return view('about',['info'=>$info]); //about.blade.php
    // return view('about')->with(['info'=>$info]); // a different way to pass data
    // return view('about')->withInfo($info); // a different way to pass data
    // return view('about',compact('info')); // a different way to pass data
});

Route::get('users', ['uses' => 'UsersController@index']);
Route::get('users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
