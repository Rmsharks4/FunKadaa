<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Promo extends Eloquent
{
	protected $table = 'promos';
	public $timestamps = [];
	protected $fillable = ['name','discount']; 
	public $promoid;
	public $name;
	public $discount;
}

?>