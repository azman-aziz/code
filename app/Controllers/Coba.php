<?php namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function oke($nama = ''){
		// this->nama di ambil dari parent utama 
		// echo "nama saya Adalah : $this->nama";

		echo "nama saya Adalah : $nama";
	}
	//--------------------------------------------------------------------

}
