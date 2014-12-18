<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-12-17
 * Time: 18:52
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Image extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    protected $table = 'images';

    public function albums()
    {
        return $this->belongsTo('Albums');
    }
} 