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
        $user = new User();
        $user->signIn(Input::get('username'), Input::get('password'));
    }
} 