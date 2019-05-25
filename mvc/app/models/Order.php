<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Order extends Eloquent
{
	protected $table = 'orders';
	public $timestamps = [];
	protected $fillable = ['userid','status','promoid']; 
	public $orderid;
	public $userid;
	public $status;
	public $promoid;
}

?>