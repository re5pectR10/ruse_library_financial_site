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
        foreach ($atelie->doc as $d) {
            $atelietaToSend[$counter]['docs']['path'][] = URL::to('/').'/file?name='.$d->name.'&article_id='.$atelie->id;
            $atelietaToSend[$counter]['docs']['name'][] = $d->name;
        }

        $counter++;
    }

    echo json_encode($atelietaToSend);
});
/*
Route::get('/albums', function()
{
    $albums = Album::orderBy('id', 'DESC')->Paginate(3);
    $counter = 0;
    foreach($albums as $a)
    {
        $albumsToSend[$counter]['name'] = $a->name;
        if (isset($a->images[0]))
        {
            $albumsToSend[$counter]['path'] = 'pictures/' . $a->id . '/' . $a->images[0]->id . '.' . $a->images[0]->extension;
        } else
        {
            $albumsToSend[$counter]['path'] = 'images/does_not_exist.png';
            $albumsToSend[$counter]['images']['path'][] = 'images/does_not_exist.png';
        }
        foreach ($a->images as $i) {
            $albumsToSend[$counter]['images']['path'][] = 'pictures/'.$a->id.'/'.$i->id . '.' . $i->extension;
            $albumsToSend[$counter]['images']['desc'][] = $i->description;
            //$atelietaToSend[$counter]['docs']['name'][] = $d->name;
        }

        $counter++;
    }

    echo json_encode($albumsToSend);
});
*/

Route::get('/albums', function()
{
    $albums = Album::orderBy('id', 'DESC')->Paginate(3);
    $counter = 0;
    foreach($albums as $a)
    {
        $albumsToSend[$counter]['name'] = $a->name;
        $albumsToSend[$counter]['id'] = $a->id;
        if (isset($a->images[0]))
        {
            $albumsToSend[$counter]['path'] = 'pictures/' . $a->id . '/' . $a->images[0]->id . '.' . $a->images[0]->extension;
        } else
        {
            $albumsToSend[$counter]['path'] = 'images/does_not_exist.png';
            $albumsToSend[$counter]['images']['path'][] = 'images/does_not_exist.png';
        }

        $counter++;
    }

    echo json_encode($albumsToSend);
});
Route::get('/pics', function()
{
    $albums = Album::find(Input::get('id'));

    $albumsToSend['description'] = $albums->description;
    foreach ($albums->images as $i) {
        $albumsToSend['images']['path'][] = 'pictures/'.Input::get('id').'/'.$i->id . '.' . $i->extension;
        $albumsToSend['images']['desc'][] = $i->description;
    }

    echo json_encode($albumsToSend);
});
Route::get('/reminder', array('uses' => 'RemindersController@getRemind'));
Route::post('/reminder', array('uses' => 'RemindersController@postRemind'));
Route::post('/reset', array('uses' => 'RemindersController@postReset'));
Route::get('/password/reset/{token}', array('uses' => 'RemindersController@getReset'));
Route::post('/signin', array('before' => 'csrf', 'uses' => 'UserController@signIn'));
Route::post('/login', array('before' => 'csrf', 'uses' => 'UserController@logIn'));
Route::get('/logout', array('uses' => 'UserController@logOut'));
Route::get('/file', array('uses' => 'FileController@getDoc'));
Route::post('/sendmsg', array('before' => 'csrf', 'uses' => 'UserController@sendMessage'));
Route::get('/user/profile', array('before' => 'auth', 'uses' => 'UserController@getProfile'));
Route::post('/user/change', array('before' => 'auth|csrf', 'uses' => 'UserController@changeProfile'));
Route::get('/user/budget', array('before' => 'auth', 'uses' => 'UserController@getBudget'));

Route::group(array('prefix' => 'admin', 'before' => 'admin'), function()
{
    Route::get('/atelieta/edit', array('uses' => 'AdminController@getAtelie'));
    Route::post('/atelieta/edit', array('uses' => 'AdminController@editAtelie'));
    Route::get('/atelieta', array('uses' => 'AdminController@getAtelieta'));
    Route::get('/atelieta/deletefile', array('uses' => 'AdminController@deleteFile'));
    Route::get('/atelieta/add', array('uses' => 'AdminController@setAtelie'));
    Route::post('/atelieta/add', array('uses' => 'AdminController@addAtelie'));
    Route::get('/atelieta/delete', array('uses' => 'AdminController@deleteAtelie'));
    Route::get('/users', array('uses' => 'AdminController@getUsers'));
    Route::get('/users/makeadmin', array('uses' => 'AdminController@makeAdmin'));
    Route::get('/users/removeadmin', array('uses' => 'AdminController@removeAdmin'));
    Route::get('/users/delete', array('uses' => 'AdminController@deleteUser'));
    Route::get('/messages/delete', array('uses' => 'AdminController@deleteMessage'));
    Route::get('/messages', array('uses' => 'AdminController@getMessages'));
    Route::get('/albums', array('uses' => 'AdminController@getAlbums'));
    Route::get('/albums/delete', array('uses' => 'AdminController@deleteAlbum'));
    Route::get('/albums/add', array('uses' => 'AdminController@setAlbum'));
    Route::post('/albums/add', array('uses' => 'AdminController@addAlbum'));
    Route::get('/albums/edit', array('uses' => 'AdminController@getAlbum'));
    Route::post('/albums/edit', array('uses' => 'AdminController@editAlbum'));
    Route::get('/albums/deleteimage', array('uses' => 'AdminController@deleteImage'));
    Route::get('/videos', array('uses' => 'AdminController@getVideos'));
    Route::get('/videos/delete', array('uses' => 'AdminController@deleteVideo'));
    Route::get('/videos/edit', array('uses' => 'AdminController@getVideo'));
    Route::post('/videos/edit', array('uses' => 'AdminController@editVideo'));
    Route::get('/videos/add', array('uses' => 'AdminController@setVideo'));
    Route::post('/videos/add', array('uses' => 'AdminController@addVideo'));
    Route::get('/slides', array('uses' => 'AdminController@getSlides'));
    Route::post('/slides/update', array('uses' => 'AdminController@updateSlide'));
    Route::get('/media', array('uses' => 'AdminController@getMedias'));
    Route::get('/media/edit', array('uses' => 'AdminController@getMedia'));
    Route::post('/media/edit', array('uses' => 'AdminController@editMedia'));
    Route::get('/media/add', array('uses' => 'AdminController@setMedia'));
    Route::post('/media/add', array('uses' => 'AdminController@addMedia'));
    Route::get('/media/delete', array('uses' => 'AdminController@deleteMedia'));
    Route::get('/media/deletemediaimage', array('uses' => 'AdminController@deleteMediaImage'));
    Route::get('/markmsg', array('uses' => 'AdminController@markMessageAsSeen'));
});

View::composer('acc_admin_menu', function($view)
{
    $unseenMessagesCount = Message::where('is_seen', '=', '0')->count();
    $view->with('unseenMessagesCount', $unseenMessagesCount);
});