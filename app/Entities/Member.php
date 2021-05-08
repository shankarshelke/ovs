<?php
namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Member extends Entity
{
    protected $attributes = [
        'id' => 0,
        'user_id' => null,
        'election_id' => null,
        'name' => null,     
        'aadhar_no' => null,     
        'contact' => null,     
        'email' => null,     
        'pincode' => null,     
        'taluka' => null,     
        'district' => null,     
        'state' => null,     
        'short_desc' => null,     
        'profile_name' => null,     
        'profile_path' => null,     
        'profile_full_path' => null,     
        'parti_logo_name' => null,     
        'parti_logo_path' => null,     
        'parti_logo_full_path' => null, 
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'active' => null,
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}