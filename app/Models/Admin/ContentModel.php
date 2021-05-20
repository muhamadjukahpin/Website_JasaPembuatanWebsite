<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table = "content";
    protected $useTimestamps = true;
    protected $allowedFields = ['text'];
}
