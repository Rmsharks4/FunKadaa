<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserFollow extends Eloquent
{
	protected $table = 'userfollows';
	public $timestamps = [];
	protected $fillable = ['userfollowerid','userfollowingid']; 
	public $userfollowerid;
	public $userfollowingid;
}

?>