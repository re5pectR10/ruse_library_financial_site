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
            return Redirect::to('/')->with('showForm', 'signin')->withErrors($validate, 'signin')->withInput();
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
            return Redirect::to('/')->withErrors($validate, 'login')->withInput()->with('showForm', "login");
        }

        $rememberMe = Input::has('remember');
        if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password']), $rememberMe)) {
            return Redirect::to('/');
        } else {
            return Redirect::to('/')->with('showForm', 'login')->withInput();
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

    public function sendMessage()
    {
        $input = Input::all();
        if (isset($input['name']))
        {
            $rules = array('name' => 'required | max:50 | min:3', 'email' => 'required | email');
            $validate = Validator::make(array_map('trim', $input), $rules);
            if ($validate->fails()) {
                return Redirect::to('/')->withErrors($validate, 'message')->withInput()->with('msg', '0');
            }

            $name = $input['name'];
            $email = $input['email'];
        } else
        {
            $email = Auth::get('email');
            $name = Auth::get('first_name') . ' ' . Auth::get('family_name');
            if ($name != ' ')
            {
                $name .= ' (' . Auth::get('username') . ')';
            } else
            {
                $name = Auth::get('username');
            }
        }

        $msg = new Message();
        $msg->name = $name;
        $msg->email = $email;
        $msg->content = $input['message'];
        $msg->is_seen = 0;
        $msg->save();

        return Redirect::to('/');
    }

    public function getProfile() {

        $user = Auth::user();

        return View::make('user_profile', array('user' => $user));
    }

    public function changeProfile() {

        $input = Input::all();
        $rules = array('email' => 'email | unique:users');
        $user = Auth::user();

        if ($input['email'] != '')
        {
            $validate = Validator::make(array_map('trim', $input), $rules);
            if ($validate->fails()) {
                return  Redirect::back()->withErrors($validate)->withInput();;
            }

            $user->email = $input['email'];
        }

        if (isset($input['password']))
        {
            $user->password = Hash::make($input['password']);
        }

        $user->save();

        return Redirect::to('/');
    }
} 