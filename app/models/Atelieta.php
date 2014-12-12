<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-12-9
 * Time: 16:01
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Atelieta extends Eloquent implements UserInterface, RemindableInterface  {
    use UserTrait, RemindableTrait;

    protected $table = 'atelieta';

    public function user()
    {
        return $this->belongsTo('User');
    }
} 