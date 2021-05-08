<?php
namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class Election extends Entity
{
    protected $attributes = [
        'id' => 0,
        'user_id' => null,
        'name' => null,     
        'election_type' => null,     
        'election_type_name' => null,     
        'start_date_time' => null,     
        'end_date_time' => null, 
        'created_at' => null,
        'updated_at' => null,
        'deleted_at' => null,
        'active' => null,
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}