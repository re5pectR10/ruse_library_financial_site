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

        $input = Input::except(array('files'));
        $rules = array('title' => 'max:50', 'description' => 'max:500');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        $atelie = Atelieta::find(Input::get('id'));
        $atelie->title = $input['title'];
        $atelie->description = $input['description'];
        $atelie->content = $input['content'];
        $atelie->save();

        if (Input::hasFile('files'))
        {
            $files = Input::file('files');
            $i = 0;
            foreach ($files as $file)
            {
                $filesName[$i] = str_replace(' ', '_', $file->getClientOriginalName());
                if (strlen($filesName[$i]) > 200)
                {
                    return Redirect::back()->with('files_error', 'The file name is too long');
                }

                $i++;
            }

            foreach ($atelie->doc as $d)
            {
                foreach ($filesName as $file)
                {
                    if ($file == $d->name)
                    {
                        return Redirect::back()->with('files_error', 'The file ' . $file . ' already exist');
                    }
                }
            }

            $this->saveDoc($files, $atelie->id, $filesName);
        }

        return Redirect::to('/admin/atelieta');
    }

    private function saveDoc($files, $atelieID, $inputFliesName = null) {
        $i = 0;
        foreach($files as $file)
        {
            if (isset($inputFliesName))
            {
                $filename = $inputFliesName[$i];
                $i++;
            } else
            {
                $filename = str_replace(' ', '_', $file->getClientOriginalName());
            }

            $doc = new Doc();
            $doc->atelie_id = $atelieID;
            $doc->name = $filename;
            $doc->extension = $file->getClientOriginalExtension();
            $doc->save();

            $destinationPath = 'files' . DIRECTORY_SEPARATOR . $atelieID;
            $filePath = $filename;
            //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
            $file->move($destinationPath, $filePath);
        }
    }

    public function addAtelie() {

        $input = Input::except(array('files'));
        $rules = array('title' => 'max:50', 'description' => 'max:500');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        $atelie = new Atelieta();
        $atelie->user_id = Auth::user()->id;
        $atelie->title = $input['title'];
        $atelie->description = $input['description'];
        $atelie->content = $input['content'];
        $atelie->save();

        if (Input::hasFile('files'))
        {
            $this->saveDoc(Input::file('files'), $atelie->id);
        }

        return Redirect::to('/admin/atelieta');
    }

    public function deleteAtelie() {

        $atelie = Atelieta::find(Input::get('id'));
        $atelie->delete();

        File::deleteDirectory(public_path() . '/files/' . Input::get('id'));

        return Redirect::to('/admin/atelieta');
    }

    public function getUsers() {

        $users = User::paginate(30);
        return View::make('admin_panel_users',array('users'=>$users));
    }

    public function makeAdmin() {
        $user = User::find(Input::get('id'));
        $user->user_type = 1;
        $user->save();

        return Redirect::back();
    }

    public function removeAdmin() {
        $user = User::find(Input::get('id'));
        $user->user_type = 2;
        $user->save();

        return Redirect::back();
    }

    public function deleteUser() {
        $user = User::find(Input::get('id'));
        $user->delete();

        return Redirect::back();
    }

    public function deleteFile() {

        $doc = Doc::find(Input::get('id'));
        $doc->delete();
        File::delete(public_path() . DIRECTORY_SEPARATOR.'files'. DIRECTORY_SEPARATOR . Input::get('article_id') . DIRECTORY_SEPARATOR . Input::get('name'));

        return Redirect::back();
    }

    public function getMessages() {
        $messages = Message::orderBy('id', 'DESC')->Paginate(15);

        return View::make('admin_panel_messages', array('messages' => $messages));
    }
}