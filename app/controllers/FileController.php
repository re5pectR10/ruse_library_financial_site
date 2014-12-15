<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-12-14
 * Time: 19:48
 */

class FileController extends BaseController{

    public function getDoc(){
        $file= public_path(). DIRECTORY_SEPARATOR."files" .DIRECTORY_SEPARATOR. Input::get('article_id') . DIRECTORY_SEPARATOR . Input::get('id');
        $headers = array(
            'Content-Type' => 'image',
        );
        return Response::download($file);
    }
} 