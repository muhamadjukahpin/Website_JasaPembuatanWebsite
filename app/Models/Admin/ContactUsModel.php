<?php

namespace App\Models\Admin;

use CodeIgniter\Model;

class ContactUsModel extends Model
{
    protected $table = "contact_us";
    protected $useTimestamps = true;
    protected $allowedFields = ['name', 'number'];
}
