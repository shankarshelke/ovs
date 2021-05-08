<?php
namespace App\Models;

class CategoriesModel extends BaseModel
{
	public $table = 'categories';
	public $primary_key = 'id';
	public $useAutoIncrement = true;
	
	public $useSoftDeletes = true;
	public $returnType = 'App\Entities\Category';
    public $allowedFields = ['name', 'user_id', 'file_name', 'file_path', 'file_full_path'];
    public $useTimestamps = true;
    public $createdField  = 'created_at';
    public $updatedField  = 'updated_at';
    public $deletedField  = 'deleted_at';

    public $validationRules    = [];
    public $validationMessages = [];
    public $skipValidation     = false;
}
