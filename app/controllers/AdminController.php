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

        $postMax = ini_get('post_max_size');
        if (!isset($input['id']))
        {
            return Redirect::back()->with('files_error', 'Може де се качват файлове не по-големи от ' . $postMax . ' на веднъж!!!');
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

        $postMax = ini_get('post_max_size');
        if (!isset($input['title']))
        {
            return Redirect::back()->with('files_error', 'Може де се качват файлове не по-големи от ' . $postMax . ' на веднъж!!!');
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
        File::delete(public_path() . DIRECTORY_SEPARATOR . 'files'. DIRECTORY_SEPARATOR . Input::get('article_id') . DIRECTORY_SEPARATOR . Input::get('name'));

        return Redirect::back();
    }

    public function getMessages() {

        $messages = Message::orderBy('id', 'DESC')->Paginate(10);
        //$msgToUpdate=new ReflectionClass($messages);
        //$msgToUpdate = clone($messages);
        //Message::orderBy('id', 'DESC')->take(Input::get('page')*2)->update(array('is_seen'=>'1'));

        /*foreach($messages as $msg)
        {
            $seenMsgs[]=$msg->is_seen;
            $msg->is_seen = 1;
            $msg->save();
        }*///

        //Message::orderBy('id', 'DESC')->take(Input::get('page')*2)->update(array('is_seen' => '1'));//return DB::getQueryLog();
//update messages set is_seen=1 where is_seen in (select is_seen from (select is_seen from messages order by id desc limit 0,2) tmp)
        return View::make('admin_panel_messages', array('messages' => $messages));
    }

    public function markMessageAsSeen() {

        $message = Message::find(Input::get('id'));
        $message->is_seen = 1;
        $message->save();

        return Response::json();
    }

    public function getAlbums() {

        $albums = Album::orderBy('id', 'DESC')->Paginate(15);

        return View::make('admin_panel_albums', array('albums' => $albums));
    }

    public function deleteAlbum() {

        $album = Album::find(Input::get('id'));
        $album->delete();

        File::deleteDirectory(public_path() . '/pictures/' . Input::get('id'));

        return Redirect::to('/admin/albums');
    }

    public function setAlbum() {

        return View::make('admin_panel_album_form',array('action' => 'admin/albums/add'));
    }

    public function addAlbum() {
        $input = Input::all();
        $rules = array('name' => 'max:250', 'files[]' => 'image');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        $postMax = ini_get('post_max_size');
        if (!isset($input['id']))
        {
            return Redirect::back()->with('files_error', 'Може де се качват файлове не по-големи от ' . $postMax . ' на веднъж!!!');
        }

        $album = new Album();
        $album->name = $input['name'];
        $album->description = $input['album_description'];
        $album->save();

        if (Input::hasFile('files'))
        {
            $this->saveImg(Input::file('files'), $album->id);
        }

        return Redirect::back();
    }

    public function editAlbum() {
        $input = Input::all();
        $rules = array('name' => 'max:250', 'files[]' => 'image');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        $postMax = ini_get('post_max_size');
        if (!isset($input['id']))
        {
            return Redirect::back()->with('files_error', 'Може де се качват файлове не по-големи от ' . $postMax . ' на веднъж!!!');
        }

        $album = Album::find($input['id']);
        $album->name = $input['name'];
        $album->description = $input['album_description'];

        $i = 0;
        foreach ($album->images as $image)
        {
            $image->description = $input['description'][$i];
            $image->save();
            $i++;
        }

        $album->save();
        if (Input::hasFile('files'))
        {
            $this->saveImg(Input::file('files'), $album->id);
        }

        return Redirect::back();
    }

    private function saveImg($files, $albumID) {
        foreach($files as $file)
        {
            $img = new Image();
            $img->album_id = $albumID;
            $img->extension = $file->getClientOriginalExtension();
            $img->save();

            $destinationPath = 'pictures' . DIRECTORY_SEPARATOR . $albumID;
            $filePath = $img->id . '.' . $img->extension;
            //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
            $file->move($destinationPath, $filePath);
        }
    }

    public function getAlbum() {

        $album = Album::find(Input::get('id'));

        return View::make('admin_panel_album_form',array('album'=>$album, 'action' => 'admin/albums/edit'));
    }

    public function deleteImage() {

        $img = Image::find(Input::get('id'));
        $extension = $img->extension;
        $img->delete();

        File::delete(public_path() . DIRECTORY_SEPARATOR . 'pictures'. DIRECTORY_SEPARATOR . Input::get('album_id') . DIRECTORY_SEPARATOR . Input::get('id') . '.' . $extension);

        return Redirect::back();
    }

    public function deleteVideo() {

        $img = Video::find(Input::get('id'));
        $img->delete();

        return Redirect::back();
    }

    public function getVideos() {

        $videos = Video::orderBy('id', 'DESC')->Paginate(15);
        return View::make('admin_panel_videos',array('videos'=>$videos));
    }

    public function getVideo() {

        $video = Video::find(Input::get('id'));
        $video->path = str_replace('embed/', 'watch?v=', $video->path);

        return View::make('admin_panel_video_form',array('video'=>$video, 'action' => 'admin/videos/edit'));
    }

    public function setVideo() {

        return View::make('admin_panel_video_form',array('action' => 'admin/videos/add'));
    }

    private function validateVideoInput() {

        $input = Input::all();
        $rules = array('name' => 'max:200', 'path' => 'max:150|required');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        return $input;
    }

    public function addVideo() {

        $input = $this->validateVideoInput();

        $pathArray = explode('watch?v=', $input['path']);
        if (!isset($pathArray[1]))
        {
            return Redirect::back()->with('error', 'no such video');
        }

        $video = new Video();
        $video->name = $input['name'];
        $video->path = '//www.youtube.com/embed/' . $pathArray[1];
        $video->save();

        return Redirect::to('/admin/videos');
    }

    public function editVideo() {

        $input = $this->validateVideoInput();

        $pathArray = explode('watch?v=', $input['path']);
        if (!isset($pathArray[1]))
        {
            return Redirect::back()->with('error', 'no such video');
        }

        $video = Video::find($input['id']);
        $video->name = $input['name'];
        $video->path = '//www.youtube.com/embed/' . $pathArray[1];
        $video->save();

        return Redirect::to('/admin/videos');
    }

    public function getSlides() {

        $slide = Slide::Paginate(1);

        return View::make('admin_panel_slides', array('slide' => $slide));
    }

    public function updateSlide() {

        $input = Input::all();
        $rules = array('title' => 'max:250');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        $slide = Slide::find($input['id']);
        $slide->title = $input['title'];
        $slide->content = $input['content'];
        $slide->save();

        return Redirect::to('/');
    }

    public function getMedias() {

        $media = Media::orderBy('id', 'DESC')->Paginate(15);
        return View::make('admin_panel_medias',array('media' => $media));
    }

    public function getMedia() {

        $media = Media::find(Input::get('id'));
        if ($media->extension != '0')
        {
            $img = 'media/' . $media->id . '/media.' . $media->extension;
        } else
        {
            $img = '0';
        }

        return View::make('admin_panel_media_form',array('media' => $media, 'image' => $img, 'action' => 'admin/media/edit'));
    }

    public function setMedia() {

        return View::make('admin_panel_media_form',array('action' => 'admin/media/add'));
    }

    public function addMedia() {
        $input = Input::all();
        $rules = array('title' => 'max:200', 'desc' => 'max:500', 'link' => 'url | max:250', 'file' => 'image');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        $media = new Media();
        $media->title = $input['title'];
        $media->description = $input['desc'];
        $media->date = $input['date'];
        $media->link = $input['link'];
        $media->extension = '0';
        $media->save();

        if (Input::hasFile('file'))
        {
            $img = Input::file('file');

            $media->extension = $img->getClientOriginalExtension();
            $media->save();

            $destinationPath = 'media' . DIRECTORY_SEPARATOR . $media->id;
            $filePath = 'media.' . $img->getClientOriginalExtension();
            //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
            $img->move($destinationPath, $filePath);
        }

        return Redirect::to('/admin/media');
    }

    public function editMedia() {
        $input = Input::all();
        $rules = array('title' => 'max:200', 'desc' => 'max:500', 'link' => 'url | max:250', 'file' => 'image');
        $validate = Validator::make($input, $rules);
        if ($validate->fails()) {
            return Redirect::back()->withErrors($validate)->withInput();
        }

        $media = Media::find($input['id']);
        $media->title = $input['title'];
        $media->description = $input['desc'];
        $media->date = $input['date'];
        $media->link = $input['link'];
        $media->save();

        if (Input::hasFile('file'))
        {
            if (File::exists('media' . DIRECTORY_SEPARATOR . $media->id . DIRECTORY_SEPARATOR . 'media.'. $media->extension))
            {
                return Redirect::back()->withInput()->with('files_error', 'Already have image');
            }

            $img = Input::file('file');

            $media->extension = $img->getClientOriginalExtension();
            $media->save();

            $destinationPath = 'media' . DIRECTORY_SEPARATOR . $media->id;
            $filePath = 'media.' . $img->getClientOriginalExtension();
            //$extension =$file->getClientOriginalExtension(); //if you need extension of the file
            $img->move($destinationPath, $filePath);
        }

        return Redirect::to('/admin/media');
    }

    public function deleteMediaImage() {

        $input = Input::all();

        $media = Media::find($input['id']);
        File::delete(public_path() . DIRECTORY_SEPARATOR . 'media' . DIRECTORY_SEPARATOR . $input['id'] . DIRECTORY_SEPARATOR . 'media.' . $media->extension);
        $media->extension = '0';
        $media->save();

        return Redirect::back();
    }

    public function deleteMedia() {

        $media = Media::find(Input::get('id'));
        $media->delete();

        File::deleteDirectory(public_path() . DIRECTORY_SEPARATOR . 'media' . DIRECTORY_SEPARATOR . Input::get('id'));

        return Redirect::to('/admin/media');
    }

    public function deleteMessage() {

        $msg = Message::find(Input::get('id'));
        $msg->delete();

        return Redirect::back();
    }
}