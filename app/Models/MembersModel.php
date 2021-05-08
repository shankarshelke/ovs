<?php
namespace App\Models;

class MembersModel extends BaseModel
{
	public $table = 'members';
	public $primary_key = 'id';
	public $useAutoIncrement = true;
	
	public $useSoftDeletes = true;
	public $returnType = 'App\Entities\Category';
    public $allowedFields = ['name', 'user_id', 'election_id', 'aadhar_no', 'contact', 'email', 'pincode', 'taluka', 'district', 'state', 'short_desc', 'profile_name', 'profile_path', 'profile_full_path', 'parti_logo_name', 'parti_logo_path', 'parti_logo_full_path'];
    public $useTimestamps = true;
    public $createdField  = 'created_at';
    public $updatedField  = 'updated_at';
    public $deletedField  = 'deleted_at';

    public $validationRules    = [];
    public $validationMessages = [];
    public $skipValidation     = false;
}
