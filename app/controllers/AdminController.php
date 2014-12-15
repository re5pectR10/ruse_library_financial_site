<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-12-12
 * Time: 16:18
 */

class AdminController extends BaseController{

    public function getAtelieta() {

        $allAtelieta = Atelieta::orderBy('id', 'DESC')->Paginate(10);
        return View::make('admin_panel_atelieta',array('atelieta'=>$allAtelieta));
    }

    public function getAtelie() {

        $atelie = Atelieta::find(Input::get('id'));
        return View::make('admin_panel_article',array('atelie'=>$atelie, 'action' => 'admin/atelieta/edit'));
    }

    public function setAtelie() {

        return View::make('admin_panel_article',array('action' => 'admin/atelieta/add'));
    }

    public function editAtelie() {

        $atelie = Atelieta::find(Input::get('id'));
        $atelie->title = Input::get('title');
        $atelie->description = Input::get('description');
        $atelie->content = Input::get('content');
        $atelie->save();

        return Redirect::to('/admin/atelieta');
    }

    public function addAtelieta() {

        $atelie = new Atelieta();
        $atelie->user_id = Auth::user()->id;
        $atelie->title = Input::get('title');
        $atelie->description = Input::get('description');
        $atelie->content = Input::get('content');
        $atelie->save();
        $files = Input::file('files');

        foreach($files as $file)
        {
            $doc = new Doc();
            $doc->atelie_id = $atelie->id;
            $doc->name = $file->getClientOriginalName();
            $doc->extension = $file->getClientOriginalExtension();
            $doc->save();

            $destinationPath = 'files/'.$atelie->id.'.'.$file->getClientOriginalExtension();
            $filename = $doc->id;
            //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
            $file->move($destinationPath, $filename);
        }

        return Redirect::to('/admin/atelieta');
    }

    public function deleteAtelie() {

        $atelie = Atelieta::find(Input::get('id'));
        $atelie->delete();

        return Redirect::to('/admin/atelieta');
    }

    public function getUsers() {

        $users = User::paginate(30);
        return View::make('admin_panel_users',array('users'=>$users));
    }
}