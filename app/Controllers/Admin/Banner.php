<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\BannerModel;

date_default_timezone_set("Asia/Jakarta");

class Banner extends BaseController
{
    protected $BannerModel;

    public function __construct()
    {
        $this->BannerModel = new BannerModel();
    }
    public function index()
    {
        $data['title'] = 'Banner';
        $data['banner'] = $this->BannerModel->find(1);
        return view('admin/banner', $data);
    }

    public function edit($id)
    {
        $data = [
            "title" => "Form Edit Banner",
            "banner" => $this->BannerModel->find($id),
            "validation" => \Config\Services::validation()
        ];

        return view('admin/edit/edit_banner', $data);
    }

    public function update($id)
    {
        $oldImg = $this->BannerModel->find($id)['img'];

        $validation = \Config\Services::validation();
        // if (!$this->validate([
        //     'title' => 'required',
        // ])) {
        //     return redirect()->to('/banner/' . $id)->withInput();
        // }

        if (!$validation->setRules([
            'title' => 'required',
            'isi' => 'required',
            'img' => 'uploaded[img]|max_size[img,1024]|mime_in[img,image/jpg,image/jpeg,image/png,image/gif]|is_image[img]'
        ])) {
            return redirect()->to('/banner/' . $id)->withInput();
        }

        // mengambil gambar
        $fileCover = $this->request->getFile('img');
        if ($fileCover->getError() == 4) {
            $imgName = $oldImg;
        } else {
            // hapus file img lama
            unlink('img/' . $oldImg);
            // generate nama img random
            $imgName = $fileCover->getRandomName();
            // Memindahkan file gambar
            $fileCover->move('img', $imgName);
        }

        $this->BannerModel->update([$id], [
            'img' => $imgName,
            'title' => $this->request->getPost('title'),
            'isi' => $this->request->getPost('isi'),
        ]);

        session()->setFlashdata('message', 'success-edit');
        return redirect()->to('/banner');
    }
}
