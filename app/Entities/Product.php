<?php
namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Product extends Entity
{
    protected $attributes = [
        'id' => 0,
        'user_id' => null,
        'name' => null,        // Represents a username
        'short_desc' => null,        // Represents a username
        'long_desc' => null,
        'colors' => null,
        'cat_ids' => null,
        'tags' => null,
        'price' => null,
        'sale_price' => null,
        'sku' => null,
        'stock_status' => 1,
        'quantity' => 0,
        'file_name' => null,
        'file_path' => null,
        'file_full_path' => null,
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'active' => null,
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $casts = ['cat_ids' => 'csv', 'colors' => 'csv'];
}