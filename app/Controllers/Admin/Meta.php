<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\MetaModel;

date_default_timezone_set("Asia/Jakarta");

class Meta extends BaseController
{
    protected $MetaModel;

    public function __construct()
    {
        $this->MetaModel = new MetaModel();
    }

    public function index()
    {
        $data['title'] = 'Meta';
        $data['meta'] = $this->MetaModel->find(1);
        return view('admin/meta', $data);
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Meta';
        $data['validation'] = \Config\Services::validation();
        $data['meta'] = $this->MetaModel->find($id);
        return view('admin/edit/edit_meta', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'text' => 'required'
        ])) {
            return redirect()->to('/meta/' . $id)->withInput();
        }

        $this->MetaModel->update($id, [
            'text' => $this->request->getPost('text')
        ]);

        session()->setFlashdata('message', 'success-edit');
        return redirect()->to('/meta');
    }
}
