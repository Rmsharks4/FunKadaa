<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class OrderDetail extends Eloquent
{
	protected $table = 'orderdetails';
	public $timestamps = [];
	protected $fillable = ['orderid','fullname','phone','email','address','city','country','province','zip','bill']; 
	public $orderid;
	public $fullname;
	public $phone;
	public $email;
	public $address;
	public $city;
	public $country;
	public $province;
	public $zip;
	public $bill;
}

?>