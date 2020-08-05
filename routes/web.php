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

use App\Http\Controllers\Controller;

//route::get('/', function () {
//   return view('welcome');
//});

route::get('/', 'HomeController@index');
route::get('/register', 'AuthController@index');
route::post('/welcome', 'AuthController@store');