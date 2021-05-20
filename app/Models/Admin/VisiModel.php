<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class VisiModel extends Model
{
    protected $table = "visi";
    protected $useTimestamps = true;
    protected $allowedFields = ['text'];
}
