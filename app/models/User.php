<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public  function signIn($input)
    {
        $rules = array('username' => 'required | max:50 | min:3 | unique:users', 'email' => 'required | email | unique:users', 'password' => 'required');
        $validate = Validator::make(array_map('trim', $input), $rules);
        if ($validate->fails()) {
            return $validate;
        }

        $user = new User;

        $user->username = $input['username'];
        $user->password = Hash::make($input['password']);
        $user->email = $input['email'];
        $user->user_type = 2;

        $user->save();
    }

    public function logIn($input)
    {
        $rules = array('username' => 'required | max:50 | min:3', 'password' => 'required');
        $validate = Validator::make(array_map('trim', $input), $rules);
        if ($validate->fails()) {
            return $validate;
        }

        $rememberMe = Input::has('remember');
        if (Auth::attempt(array('username' => $input['username'], 'password' => $input['password']), $rememberMe)) {
            return Redirect::to('/');
        } else {
            return Redirect::to('/')->with('loginError', 'wrong input')->withInput();
        }
    }
}
