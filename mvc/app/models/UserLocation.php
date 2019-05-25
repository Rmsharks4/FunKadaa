<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class UserLocation extends Eloquent
{
	protected $table = 'userlocation';
	public $timestamps = [];
	protected $fillable = ['userid','address','city','country','province','zip']; 
	public $userid;
	public $address;
	public $city;
	public $country;
	public $province;
	public $zip;
}

?>