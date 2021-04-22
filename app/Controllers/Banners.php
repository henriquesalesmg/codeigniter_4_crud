<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use App\Models\BannersModel;
use CodeIgniter\HTTP\Files\UploadedFile;
use App\Config\Images;

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
			'banner' => 'uploaded[banner]|max_size[banner, 1024]|is_image[banner]',
		];

		$model = new BannersModel();

		if($this->validate($rules)){
			
			$file = $this->request->getFile('banner');

			if(! $file->isValid() ){
				return $this->fail($file->getErrorString());
			}

			$file->move('./assets/uploads');

			
			$banner = [
				'id'         =>  $this->request->getVar('id'),
				'titulo'     =>  $this->request->getVar('titulo'),
				'descricao'  =>  $this->request->getVar('descricao'),
				'banner'     =>  $file->getName(),
				'ativo'      =>  $this->request->getVar('ativo')
			];
			

			$model->save($banner);

			$image = \Config\Services::image()
					 ->withFile('./assets/uploads/'.$banner['banner'])
					 ->fit(400,300, 'center')
					 ->save('./assets/uploads/thumbnails/thumb_'.$banner['banner']);


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

	public function delete($id = null){
		$model = new BannersModel();
		$model->delete($id);
		$session = 1;

		return redirect()->to( base_url('banners/list') );
	}
	
}
