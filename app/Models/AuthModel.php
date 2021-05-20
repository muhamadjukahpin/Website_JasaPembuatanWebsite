<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = "users";
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'email', 'password'];
}
