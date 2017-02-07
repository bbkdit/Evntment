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


Route::get('/', [
    'as' => 'homePage',
    'uses' => 'HomeController@showHomePage'
]);
Route::get('/about-us', [
    'as' => 'about',
    'uses' => 'HomeController@showAboutPage'
]);
Route::get('/book-now', [
    'as' => 'book-now',
    'uses' => 'HomeController@showBookingPage'
]);
Route::get('/faq', [
    'as' => 'faq',
    'uses' => 'HomeController@showFAQPage'
]);
Route::get('/terms-and-conditions', [
    'as' => 'terms',
    'uses' => 'HomeController@showTermsPage'
]);


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/dashboard', 'AdminController@index');

Route::group(['prefix' => 'experience', 'as' => 'experience.'], function ()
{
    Route::get('/',[
        'as' => 'list',
        'uses' => 'HomeController@showExperienceList'
    ]);
    Route::get('/{id}',[
        'as' => 'profile',
        'uses' => 'HomeController@showExperienceProfile'
    ]);
});
//Route::get('/experiance', 'HomeController@experianceview');
//Route::get('/experience/single/{id}', 'HomeController@experiencesingleview');

Route::post('/admin/add', 'AdminController@store');
Route::get('/delete/{c_id}/{id}', 'AdminController@deleteRecord');


Route::get('/admin/add/{id}', 'AdminController@showform');
Route::get('/admin/form/image', 'AdminController@imgage');
Route::get('/admin/add/image/{c_id}/{id}', 'AdminController@imgform');
Route::post('/admin/add/img', 'AdminController@image');

Route::post('upload', 'AdminController@upload');

/**
 * Decorations Routes
 */
Route::post('/admin/add/decoration', 'AdminController@storeDecoration');
Route::group(['prefix' => 'decoration', 'as' => 'decoration.'], function ()
{
    Route::get('/',[
        'as' => 'list',
        'uses' => 'HomeController@showDecorationList'
    ]);
    Route::get('/{id}',[
        'as' => 'profile',
        'uses' => 'HomeController@showDecorationProfile'
    ]);
});
//Route::get('/decoration', 'HomeController@decorationview');
//Route::get('/decoration/single/{id}', 'HomeController@decorationsingleview');

/**
 * Banquets Routes
 */
Route::post('/admin/add/banquets', 'AdminController@storeBanquets');
Route::group(['prefix' => 'banquets', 'as' => 'banquets.'], function ()
{
    Route::get('/',[
        'as' => 'list',
        'uses' => 'HomeController@showBanquetsList'
    ]);
    Route::get('/{id}',[
        'as' => 'profile',
        'uses' => 'HomeController@showBanquetsProfile'
    ]);
});
//Route::get('/banquets', 'HomeController@banquetsview');
//Route::get('/banquets/single/{id}', 'HomeController@banquetsingleview');

/**
 * Bachelor's Party Routes
 */
Route::post('/admin/add/bachlore', 'AdminController@storeBachlore');

Route::group(['prefix' => 'bachelors-party', 'as' => 'bachelors-party.'], function ()
{
    Route::get('/',[
        'as' => 'list',
        'uses' => 'HomeController@showBachelorsList'
    ]);
    Route::get('/{id}',[
        'as' => 'profile',
        'uses' => 'HomeController@showBachelorsProfile'
    ]);
});

//Route::get('/bachlore/single/{id}', 'HomeController@bachloresingleview');

Route::post('/admin/add/conference', 'AdminController@storeConference');
Route::get('/conference', 'HomeController@conferenceview');
Route::get('/conference/single/{id}', 'HomeController@conferencesingleview');