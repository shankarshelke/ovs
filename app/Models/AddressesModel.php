<?php
namespace App\Models;

class AddressesModel extends BaseModel
{
	public $table = 'addresses';
	public $primary_key = 'id';
	public $useAutoIncrement = true;
	
	public $useSoftDeletes = true;
	public $returnType = 'App\Entities\Address';
    public $allowedFields = ['name', 'user_id', 'address', 'pincode', 'contact', 'email'];
    public $useTimestamps = true;
    public $createdField  = 'created_at';
    public $updatedField  = 'updated_at';
    public $deletedField  = 'deleted_at';

    public $validationRules    = [];
    public $validationMessages = [];
    public $skipValidation     = false;
}
