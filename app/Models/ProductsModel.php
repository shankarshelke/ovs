<?php
namespace App\Models;

class ProductsModel extends BaseModel
{
	public $table = 'products';
	public $primary_key = 'id';
	public $useAutoIncrement = true;
	
	public $useSoftDeletes = true;
	public $returnType = 'App\Entities\Product';
    public $allowedFields = ['name', 'user_id', 'long_desc', 'colors', 'cat_ids', 'tags', 'file_name', 'file_path', 'file_full_path', 'price', 'sale_price', 'sku', 'stock_status', 'quantity'];
    public $useTimestamps = true;
    public $createdField  = 'created_at';
    public $updatedField  = 'updated_at';
    public $deletedField  = 'deleted_at';

    public $validationRules    = [];
    public $validationMessages = [];
    public $skipValidation     = false;
}
