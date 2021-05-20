<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table = "banner";
    protected $useTimestamps = true;
    protected $allowedFields = ['title', 'isi', 'img'];
}
