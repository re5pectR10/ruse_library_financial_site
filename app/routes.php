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

Route::get('/', function()
{
    $allAtelieta = Atelieta::orderBy('id', 'DESC')->Paginate(3);
	return View::make('index_guest',array('atelieta'=>$allAtelieta));
});

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