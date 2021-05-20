<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ContentModel;

date_default_timezone_set("Asia/Jakarta");

class Content extends BaseController
{
    protected $ContentModel;

    public function __construct()
    {
        $this->ContentModel = new ContentModel();
    }

    public function index()
    {
        $data['title'] = 'Content';
        $data['contents'] = $this->ContentModel->findAll();
        return view('admin/content', $data);
    }

    public function create()
    {
        $data['title'] = 'Form add Content';
        $data['validation'] = \Config\Services::validation();
        return view('admin/create/create_content', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'text' => 'required'
        ])) {
            return redirect()->to('/create/content')->withInput();
        }

        $this->ContentModel->save([
            'text' => $this->request->getPost('text')
        ]);

        session()->setFlashdata('message', 'success-add');
        return redirect()->to('/content');
    }

    public function edit($id)
    {
        $data['title'] = 'Form edit content';
        $data['validation'] = \Config\Services::validation();
        $data['content'] = $this->ContentModel->find($id);
        return view('admin/edit/edit_content', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'text' => 'required'
        ])) {
            return redirect()->to('/content/' . $id)->withInput();
        }

        $this->ContentModel->update($id, [
            'text' => $this->request->getPost('text')
        ]);

        session()->setFlashdata('message', 'success-edit');
        return redirect()->to('/content');
    }

    public function delete($id)
    {
        $this->ContentModel->delete($id);
        session()->setFlashdata('message', 'success-delete');
        return redirect()->to('/content');
    }
}
