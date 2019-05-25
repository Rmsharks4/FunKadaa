<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Save extends Eloquent
{
	protected $table = 'saves';
	public $timestamps = [];
	protected $fillable = ['itemid','userid']; 
	public $itemid;
	public $userid;
}

?>