<?php
namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Address extends Entity
{
    protected $attributes = [
        'id' => 0,
        'user_id' => null,
        'name' => null,     
        'address' => null,     
        'pincode' => null,     
        'contact' => null,     
        'email' => null,     
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'active' => null,
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}