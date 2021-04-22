<?php

namespace App\Models;

use CodeIgniter\Model;

class BannersModel extends Model
{
	protected $table                = 'banners';
	
	protected $primaryKey           = 'id';

	protected $allowedFields        = ['titulo', 'descricao', 'ativo', 'banner'];

	protected $useTimestamps        = true;

	protected $useSoftDeletes        = true;       

	protected $createdField         = 'created_at';

	protected $updatedFiled         = 'updated_at';

	protected $deletedField         = 'deleted_at';
	
	public function getBanners($id = null){
		
		if($id === null){
			return $this->findAll();
		}

		return $this->asArray()->where(['id' => $id])->first();
	}
}
