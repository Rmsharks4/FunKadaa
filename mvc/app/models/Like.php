<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Like extends Eloquent
{
	protected $table = 'likes';
	public $timestamps = [];
	protected $fillable = ['itemid','userid']; 
	public $itemid;
	public $userid;
}

?>