<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
 
Route::get('/', function () {
    return view('welcome');
});


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'AdminController@index');

Route::get('/experiance', 'HomeController@experianceview');
Route::get('/experience/single/{id}', 'HomeController@experiencesingleview');
Route::post('/admin/add', 'AdminController@store');
Route::get('/admin/add/delete/{c_id}/{id}', 'AdminController@deleteRecord');


Route::get('/admin/add/{id}', 'AdminController@showform');
Route::get('/admin/form/image', 'AdminController@imgage');
Route::get('/admin/add/image/{c_id}/{id}', 'AdminController@imgform');
Route::post('/admin/add/img', 'AdminController@image');

Route::post('upload', 'AdminController@upload');
//for dcoration----

Route::post('/admin/add/decoration', 'AdminController@storeDecoration');
Route::get('/decoration', 'HomeController@decorationview');
Route::get('/decoration/single/{id}', 'HomeController@decorationsingleview');
//for banquets
Route::post('/admin/add/banquets', 'AdminController@storeBanquets');
Route::get('/banquets', 'HomeController@banquetsview');
Route::get('/banquets/single/{id}', 'HomeController@banquetsingleview');
//for bachlore
Route::post('/admin/add/bachlore', 'AdminController@storeBachlore');
Route::get('/bachlore', 'HomeController@bachloreview');
Route::get('/bachlore/single/{id}', 'HomeController@bachloresingleview');

Route::post('/admin/add/conference', 'AdminController@storeConference');
Route::get('/conference', 'HomeController@conferenceview');
Route::get('/conference/single/{id}', 'HomeController@conferencesingleview');