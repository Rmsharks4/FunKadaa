<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class OrderItem extends Eloquent
{
	protected $table = 'orderitems';
	public $timestamps = [];
	protected $fillable = ['orderid','itemid','quantity']; 
	public $orderid;
	public $itemid;
	public $quantity;
}

?>