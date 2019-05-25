<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class ItemImage extends Eloquent
{
	protected $table = 'itemimages';
	public $timestamps = [];
	protected $fillable = ['itemid','image']; 
	public $imageid;
	public $itemid;
	public $image;
}

?>