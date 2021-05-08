<?php
namespace App\Entities;

use CodeIgniter\Entity;
use CodeIgniter\I18n\Time;

class User extends Entity
{
    protected $attributes = [
        'id' => 0,
        'ip_address' => null,
        'username' => null,        // Represents a username
        'password' => null,
        'email' => null,
        'contact' => null,
        'activation_selector' => null,
        'activation_code' => null,
        'forgotten_password_selector' => null,
        'forgotten_password_code' => null,
        'forgotten_password_time' => null,
        'remember_selector' => null,
        'remember_code' => null,
        'created_on' => null,
        'last_login' => null,
        'active' => null,
        'first_name' => null,
        'last_name' => null,
        'company' => null,
        'phone' => null,
        'class_permissions' => null,
        'sub_class_permissions' => null,
    ];

    protected $dates = ['created_on'];
    // protected $casts = ['cat_ids' => 'csv', 'colors' => 'csv'];

    public function getName(){
        // accessor which replaces space with _ in name value
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }
}