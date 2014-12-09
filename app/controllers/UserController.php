<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-11-27
 * Time: 20:43
 */

class UserController extends BaseController{

    public  function signIn()
    {
        $input = Input::all();
        $user = new User();
        $validate = $user->signIn($input);
        if ($validate && $validate->fails()) {
            return Redirect::to('/')->withErrors($validate, 'signin')->withInput();
        } else
        {
            return Redirect::to('/');
        }
    }

    public function logIn()
    {
        $input = Input::all();
        $user = new User();
        $validate = $user->logIn($input);
        if ($validate && $validate->fails()) {
            return Redirect::to('/')->withErrors($validate, 'login')->withInput();
        } else
        {
            return Redirect::to('/');
        }
    }
} 