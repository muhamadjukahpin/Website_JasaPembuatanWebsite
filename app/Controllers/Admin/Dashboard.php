<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HomeModel;

date_default_timezone_set("Asia/Jakarta");

class Dashboard extends BaseController
{
    protected $HomeModel;

    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        return view('admin/dashboard', $data);
    }
}
