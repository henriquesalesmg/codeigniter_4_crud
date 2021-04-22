<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use App\Models\BannersModel;
use CodeIgniter\HTTP\Files\UploadedFile;

class Banners extends BaseController
{
	public function index()	{
		return view('welcome_message');
	}

	public function list($page = 'list'){
		$model = new BannersModel();
		$data = [
			'banners' => $model->getBanners()
		];

		echo view('templates/header');

		echo view('banners/list', $data);

		echo view('templates/footer');
	}

	public function new(){

		helper('form');

		echo view('templates/header');

		echo view('banners/form');

		echo view('templates/footer');
	}

	public function store(){
		helper('form');

		$rules = [
			'titulo' => 'required|min_length[3]|max_length[50]',
			'banner' => 'required',
		];

		$model = new BannersModel();

		$banner = [
			'id'         =>  $this->request->getVar('id'),
			'titulo'     =>  $this->request->getVar('titulo'),
			'descricao'  =>  $this->request->getVar('descricao'),
			'banner'     =>  $this->request->getFile('banner'),
			'ativo'      =>  $this->request->getVar('ativo')
		];
		

		if($this->validate($rules)){
			$model->save($banner);

			echo view('templates/header');	
			echo view('banners/success', $banner);	
			echo view('templates/footer');

		} else{
			echo view('templates/header');	
			echo view('banners/form');	
			echo view('templates/footer');			
		}
	}
	
	public function edit($id = null){
		$model = new BannersModel();

		$data['banners'] = $model->getBanners($id);

		if(empty($data['banners'])){
			throw new \CodeIgniter\Exceptions\PageNotFoundException("Banner não encontrado");
		}

		$data = [
			'id' => $data['banners']['id'],
			'titulo' => $data['banners']['titulo'],
			'banner' => $data['banners']['banner'],
			'ativo' => $data['banners']['ativo'],
			'descricao' => $data['banners']['descricao'],
		];

		echo view('templates/header');	
		echo view('banners/form', $data);	
		echo view('templates/footer');
	}
	
}
