<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Rating extends Eloquent
{
	protected $table = 'ratings';
	public $timestamps = [];
	protected $fillable = ['itemid','userid','rating']; 
	public $itemid;
	public $userid;
	public $rating;
}

?>