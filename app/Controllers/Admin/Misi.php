<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\MisiModel;

date_default_timezone_set("Asia/Jakarta");

class Misi extends BaseController
{
    protected $MisiModel;

    public function __construct()
    {
        $this->MisiModel = new MisiModel();
    }

    public function index()
    {
        $data['title'] = 'Misi';
        $data['misi'] = $this->MisiModel->find(1);
        return view('admin/misi', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Misi';
        $data['validation'] = \Config\Services::validation();
        $data['misi'] = $this->MisiModel->find($id);
        return view('admin/edit/edit_misi', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'text' => 'required'
        ])) {
            return redirect()->to('/misi/' . $id)->withInput();
        }

        $this->MisiModel->update($id, [
            'text' => $this->request->getPost('text')
        ]);

        session()->setFlashdata('message', 'success-edit');
        return redirect()->to('/misi');
    }
}
