<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-12-17
 * Time: 18:51
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Album extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'albums';

    public function images()
    {
        return $this->hasMany('Image', 'album_id');
    }
} 