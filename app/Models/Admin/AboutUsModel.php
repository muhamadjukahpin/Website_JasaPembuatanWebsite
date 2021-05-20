<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class AboutUsModel extends Model
{
    protected $table = "about_us";
    protected $useTimestamps = true;
    protected $allowedFields = ['text'];
}
