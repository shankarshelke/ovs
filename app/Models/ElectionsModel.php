<?php
namespace App\Models;

class ElectionsModel extends BaseModel
{
	public $table = 'elections';
	public $primary_key = 'id';
	public $useAutoIncrement = true;
	
	public $useSoftDeletes = true;
	public $returnType = 'App\Entities\Election';
    public $allowedFields = ['name', 'user_id', 'election_type', 'start_date_time', 'end_date_time'];
    public $useTimestamps = true;
    public $createdField  = 'created_at';
    public $updatedField  = 'updated_at';
    public $deletedField  = 'deleted_at';

    public $validationRules    = [];
    public $validationMessages = [];
    public $skipValidation     = false;
}
