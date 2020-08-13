<?php namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Selamat Datang | Aplikasi Saya'
		];
		echo view('layout/header', $data);
		echo view('pages/home');
		echo view('layout/footer');
	}

	public function about(){
		$data = [
			'tittle' => 'Selamat Datang | Aplikasi Saya'
		];
		echo view('layout/header',$data);
		echo view('pages/about');
		echo view('layout/footer');
	}	

	//--------------------------------------------------------------------

}
