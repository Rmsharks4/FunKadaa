<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class OrderPayment extends Eloquent
{
	protected $table = 'orderpayment';
	public $timestamps = [];
	protected $fillable = ['orderid','name','cardnum','expiration','cvv']; 
	public $orderid;
	public $name;
	public $cardnum;
	public $expiration;
	public $cvv;
}

?>