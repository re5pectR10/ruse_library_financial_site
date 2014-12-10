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
        $rules = array('username' => 'required | max:50 | min:3', 'password' => 'required');
        $validate = Validator::make(array_map('trim', $input), $rules);
        if ($validate->fails()) {
            return Redirect::to('/')->withErrors($validate, 'login')->withInput();
        }

        $rememberMe = Input::has('remember');
        if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password']), $rememberMe)) {
            return Redirect::to('/');
        } else {
            return Redirect::to('/')->with('loginError', 'wrong input')->withInput();
        }
        /*$user = new User();
        $validate = $user->logIn($input);
        if ($validate && $validate->fails()) {
            return Redirect::to('/')->withErrors($validate, 'login')->withInput();
        } else
        {
            return Redirect::to('/');
        }*/
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('/');
    }
} 