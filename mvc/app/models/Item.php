<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Item extends Eloquent
{
	protected $table = 'items';
	public $timestamps = [];
	protected $fillable = ['userid','title','description','price','quantity','category']; 
}

?>