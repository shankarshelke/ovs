<?php
namespace App\Models;
use CodeIgniter\Model;

class BaseModel extends Model
{
	public $table = 'users';
	public $primary_key = 'id';
	public $useAutoIncrement = true;
	
	public $useSoftDeletes = true;

    public $allowedFields = ['name', 'user_id'];
    public $useTimestamps = true;
    public $createdField  = 'created_at';
    public $updatedField  = 'updated_at';
    public $deletedField  = 'deleted_at';

    public $validationRules    = [];
    public $validationMessages = [];
    public $skipValidation     = false;


}
