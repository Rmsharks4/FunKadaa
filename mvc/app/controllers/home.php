<?php

class Home extends Controller 
{

	public function index($name = '', $food = '')
	{
		$this->view('home/index', ['name' => $name]);
	}

	public function create($username = '', $email = '')
	{
		User::create([
			'username' => $username,
			'email' => $email
		]);
	}
}

?>