<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
	protected $table = 'comments';
	public $timestamps = [];
	protected $fillable = ['itemid','userid','comment']; 
	public $commentid;
	public $itemid;
	public $userid;
	public $comment;
}

?>