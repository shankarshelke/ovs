<?php
namespace App\Models;

class VotersModel extends BaseModel
{
	public $table = 'voters';
	public $primary_key = 'id';
	public $useAutoIncrement = true;
	
	public $useSoftDeletes = true;
	public $returnType = 'App\Entities\Voter';
    public $allowedFields = ['name', 'user_id', 'aadhar_no', 'address', 'pincode', 'contact', 'email'];
    public $useTimestamps = true;
    public $createdField  = 'created_at';
    public $updatedField  = 'updated_at';
    public $deletedField  = 'deleted_at';

    public $validationRules    = [];
    public $validationMessages = [];
    public $skipValidation     = false;
}
