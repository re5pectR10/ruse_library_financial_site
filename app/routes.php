<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses' => 'HomeController@showIndex'));

Route::get('/atelieta', function()
{
    $allAtelieta = Atelieta::orderBy('id', 'DESC')->Paginate(3);
    $counter = 0;
    foreach($allAtelieta as $atelie)
    {
        $atelietaToSend[$counter]['title'] = $atelie->title;
        $atelietaToSend[$counter]['description'] = $atelie->description;
        $atelietaToSend[$counter]['content'] = $atelie->content;
        $counter++;
    }

    echo json_encode($atelietaToSend);
});

Route::post('/signin', array('before' => 'csrf', 'uses' => 'UserController@signIn'));
Route::post('/login', array('before' => 'csrf', 'uses' => 'UserController@logIn'));
Route::get('/logout', array('uses' => 'UserController@logOut'));
Route::get('/file', array('uses' => 'FileController@getDoc'));
Route::post('/sendmsg', array('before' => 'csrf', 'uses' => 'UserController@sendMessage'));

Route::group(array('prefix' => 'admin', 'before' => 'admin'), function()
{
    Route::get('/atelieta/edit', array('uses' => 'AdminController@getAtelie'));
    Route::post('/atelieta/edit', array('uses' => 'AdminController@editAtelie'));
    Route::get('/atelieta', array('uses' => 'AdminController@getAtelieta'));
    Route::get('/atelieta/add', array('uses' => 'AdminController@setAtelie'));
    Route::post('/atelieta/add', array('uses' => 'AdminController@addAtelieta'));
    Route::get('/atelieta/delete', array('uses' => 'AdminController@deleteAtelie'));
    Route::get('/users', array('uses' => 'AdminController@getUsers'));
});