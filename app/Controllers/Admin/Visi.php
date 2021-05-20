<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\VisiModel;

date_default_timezone_set("Asia/Jakarta");

class Visi extends BaseController
{
    protected $VisiModel;

    public function __construct()
    {
        $this->VisiModel = new VisiModel();
    }
    public function index()
    {
        $data['title'] = 'Visi';
        $data['visi'] = $this->VisiModel->find(1);
        return view('admin/visi', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Visi';
        $data['validation'] = \Config\Services::validation();
        $data['visi'] = $this->VisiModel->find($id);
        return view('admin/edit/edit_visi', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'text' => 'required'
        ])) {
            return redirect()->to('/visi/' . $id)->withInput();
        }

        $this->VisiModel->update($id, [
            'text' => $this->request->getPost('text')
        ]);

        session()->setFlashdata('message', 'success-edit');
        return redirect()->to('/visi');
    }
}
