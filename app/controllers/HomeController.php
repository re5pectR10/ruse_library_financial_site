<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
        $allAtelieta = Atelieta::orderBy('id', 'DESC')->Paginate(3);
        if (Auth::check())
        {
            if (Auth::user()->user_type == 1)
            {
                return View::make('index_admin',array('atelieta'=>$allAtelieta));
            } else
            {
                return View::make('index_user',array('atelieta'=>$allAtelieta));
            }
        } else
        {
            return View::make('index_guest',array('atelieta'=>$allAtelieta));
        }
	}

}
