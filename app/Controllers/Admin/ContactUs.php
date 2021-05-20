<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\ContactUsModel;

date_default_timezone_set("Asia/Jakarta");

class ContactUs extends BaseController
{
    protected $ContactUsModel;

    public function __construct()
    {
        $this->ContactUsModel = new ContactUsModel();
    }
    public function index()
    {
        $data['title'] = 'Contact Us';
        $data['contact_us'] = $this->ContactUsModel->findAll();
        return view('admin/contact_us', $data);
    }

    public function create()
    {
        $data['title'] = 'Form Add Contact Us';
        $data['validation'] = \Config\Services::validation();
        return view('admin/create/create_contact_us', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name' => 'required',
            'number' => 'required|is_natural'
        ])) {
            return redirect()->to('/create/contact-us')->withInput();
        }

        $this->ContactUsModel->save([
            'name' => $this->request->getPost('name'),
            'number' => 62 . $this->request->getPost('number'),
        ]);

        session()->setFlashdata('message', 'success-add');
        return redirect()->to('/contact-us');
    }

    public function edit($id)
    {
        $data['title'] = 'Form Edit Contact Us';
        $data['validation'] = \Config\Services::validation();
        $data['contact'] = $this->ContactUsModel->find($id);
        return view('admin/edit/edit_contact_us', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'name' => 'required',
            'number' => 'required|is_natural'
        ])) {
            return redirect()->to('/contact-us/' . $id)->withInput();
        }

        $this->ContactUsModel->update($id, [
            'name' => $this->request->getPost('name'),
            'number' => 62 . $this->request->getPost('number'),
        ]);

        session()->setFlashdata('message', 'success-edit');
        return redirect()->to('/contact-us');
    }

    public function delete($id)
    {
        $this->ContactUsModel->delete($id);
        session()->setFlashdata('message', 'success-delete');
        return redirect()->to('/contact-us');
    }
}
