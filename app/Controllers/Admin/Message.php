<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\HomeModel;

date_default_timezone_set("Asia/Jakarta");

class Message extends BaseController
{
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }

    public function index()
    {
        $data['title'] = 'Message';
        $data['messages'] = $this->HomeModel->findAll();
        return view('admin/message', $data);
    }

    public function delete($id)
    {
        $this->HomeModel->delete($id);
        session()->setFlashdata('message', 'success-delete');
        return redirect()->to('/message');
    }
}
