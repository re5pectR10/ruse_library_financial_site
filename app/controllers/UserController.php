<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-11-27
 * Time: 20:43
 */
use Mews\Purifier\Purifier;
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
        $rules = array('username' => 'required | max:50 | min:3', 'password' => 'required', 'user_content' => 'honeypot', 'date' => 'required|honeytime:3');
        $validate = Validator::make(array_map('trim', $input), $rules);
        if ($validate->fails()) {
            return Redirect::to('/')->withErrors($validate, 'login')->withInput()->with('showForm', "login");
        }

        $rememberMe = Input::has('remember');
        if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password']), $rememberMe)) {
            return Redirect::to('/');
        } else {
            return Redirect::to('/')->with('showForm', 'login')->withInput()->with('login_error', 'Wrong username or password');
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
        //var_dump(Purifier::clean($input));return;
        //$input=Purifier::clean($input);
        if (isset($input['name']))
        {
            $rules = array('name' => 'required | max:50 | min:3', 'email' => 'required | email', 'user_content' => 'honeypot', 'date' => 'required|honeytime:3');
            $validate = Validator::make(array_map('trim', $input), $rules);
            if ($validate->fails()) {
                return Redirect::to('/')->withErrors($validate, 'message')->withInput()->with('msg', '0');
            }

            $name = $input['name'];
            $email = $input['email'];
        } else
        {
            $email = Auth::user()->email;
           // $name = Auth::get('first_name') . ' ' . Auth::get('family_name');
            //if ($name != ' ')
            //{
            //    $name .= ' (' . Auth::get('username') . ')';
            //} else
            //{
                $name = Auth::user()->username;
            //}
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
        if ($user->user_type == 1)
        {
            $userType = 1;
        } else
        {
            $userType = 2;
        }

        return View::make('user_profile', array('user' => $user, 'user_type' => $userType));
    }

    public function changeProfile() {

        $input = Input::all();
        $user = Auth::user();

        $rules = array('email' => 'email | required | unique:users,email,'.$user->id, 'password' => 'confirmed', 'old_password' => 'required');

        $validate = Validator::make(array_map('trim', $input), $rules);
        if ($validate->fails()) {
            return  Redirect::back()->withErrors($validate)->withInput();
        }

        if (Hash::check($input['old_password'], $user->password))
        {
            $user->email = $input['email'];


            if (isset($input['password']) && strlen($input['password']) != 0)
            {
                $user->password = Hash::make($input['password']);
            }

            $user->save();

            return Redirect::to('/');
        } else
        {
            return  Redirect::back()->with('pass_conf', 'The given old password do not match')->withInput();
        }
    }

    public function getBudget() {

        if (Auth::user()->user_type == 1)
        {
            $userType = 1;
        } else
        {
            $userType = 2;
        }

        return View::make('user_family_budget', array('user_type' => $userType));
    }
} 