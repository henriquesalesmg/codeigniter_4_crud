<?php

namespace App\Controllers;
use App\Models\BannersModel;

class Home extends BaseController
{
	public function index(){
		$model = new BannersModel();
		$data = [
			'banners' => $model->getBanners()
		];

		echo view('templates/header_home');

		echo view('home', $data);

		echo view('templates/footer_home');
	}
}
