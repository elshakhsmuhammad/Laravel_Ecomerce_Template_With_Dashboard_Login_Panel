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

//Strat Site Route........... 
Route::get('/','HomeController@index');



//End Site Route....... 
/**********************************************************/
//Start Backend Admin Panel Route.....
Route::get('/Admin','AdminController@index');
Route::get('/dashboard','AdminController@show_dashboard');
Route::post('/admin-dashboard','AdminController@dashboard');
Route::get('/logout','SuperAdminController@logout');

//End Backend Admin Panel Route........ 
/**********************************************************/