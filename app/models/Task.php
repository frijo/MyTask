<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Task extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;
	protected $table      = 'task';
    protected $fillable   = array('title', 'description', 'priority','user_id','estado');
    protected $guarded    = array('id');
    public    $timestamps = false;

    public static function tasks ()
    {
    	$user = Auth::user()->id;
    	return DB::select("select  t.id, t.title, t.description, t.estado from task t, users u
							where t.id_user = ? and  u.id= ?", array($user,$user));
    }

}

