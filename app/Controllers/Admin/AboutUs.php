<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AboutUsModel;

date_default_timezone_set("Asia/Jakarta");

class AboutUs extends BaseController
{
    protected $AboutUsModel;

    public function __construct()
    {
        $this->AboutUsModel = new AboutUsModel();
    }
    public function index()
    {
        $data['title'] = 'About Us';
        $data['about'] = $this->AboutUsModel->find(1);
        return view('admin/about_us', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit About Us';
        $data['about'] = $this->AboutUsModel->find($id);
        $data['validation'] = \Config\Services::validation();
        return view('admin/edit/edit_about_us', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'text' => 'required'
        ])) {
            return redirect()->to('/about-us/' . $id)->withInput();
        }

        $this->AboutUsModel->update($id, [
            'text' => $this->request->getPost('text')
        ]);

        session()->setFlashdata('message', 'success-edit');
        return redirect()->to('/about-us');
    }
}
