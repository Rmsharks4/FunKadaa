<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Cart extends Eloquent
{
	protected $table = 'carts';
	public $timestamps = [];
	protected $fillable = ['userid','itemid','quantity'];
	public $cartid;
	public $userid;
	public $itemid;
	public $quantity; 
}

?>