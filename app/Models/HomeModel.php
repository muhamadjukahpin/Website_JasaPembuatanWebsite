<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table = "message";
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'email', 'message'];
}
