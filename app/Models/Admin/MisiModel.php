<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class MisiModel extends Model
{
    protected $table = "misi";
    protected $useTimestamps = true;
    protected $allowedFields = ['text'];
}
