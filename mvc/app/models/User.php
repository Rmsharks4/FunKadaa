<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	protected $table = 'users';
	public $timestamps = [];
	protected $fillable = ['username','email','password','fullname','phone','role']; 
}

?>