<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class MetaModel extends Model
{
    protected $table = "meta";
    protected $useTimestamps = true;
    protected $allowedFields = ['text'];
}
