<?php
/**
 * Created by PhpStorm.
 * User: Re5PecT
 * Date: 14-12-13
 * Time: 22:50
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Doc extends Eloquent implements UserInterface, RemindableInterface {

    use UserTrait, RemindableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'atelieta_files';

    public function atelieta()
    {
        return $this->belongsTo('Atelieta');
    }
} 