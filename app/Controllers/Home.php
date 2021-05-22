<?php

namespace App\Controllers;

use App\Models\HomeModel;
use App\Models\Admin\MetaModel;
use App\Models\Admin\AboutUsModel;
use App\Models\Admin\BannerModel;
use App\Models\Admin\VisiModel;
use App\Models\Admin\MisiModel;
use App\Models\Admin\ContactUsModel;
use App\Models\Admin\ContentModel;

class Home extends BaseController
{
	protected $MetaModel;
	protected $BannerModel;
	protected $ContentModel;
	protected $AboutUsModel;
	protected $ContactUsModel;
	protected $HomeModel;
	protected $VisiModel;
	protected $MisiModel;

	public function __construct()
	{
		$this->MetaModel = new MetaModel();
		$this->BannerModel = new BannerModel();
		$this->ContentModel = new ContentModel();
		$this->AboutUsModel = new AboutUsModel();
		$this->ContactUsModel = new ContactUsModel();
		$this->HomeModel = new HomeModel();
		$this->VisiModel = new VisiModel();
		$this->MisiModel = new MisiModel();
	}
	public function index()
	{
		$data['title'] = 'Pembuatan Jasa Web';
		$data['meta'] = $this->MetaModel->find(1);
		$data['banner'] = $this->BannerModel->find(1);
		$data['contents'] = $this->ContentModel->findAll();
		$data['about_us'] = $this->AboutUsModel->find(1);
		$data['contact_us'] = $this->ContactUsModel->findAll();
		$data['visi'] = $this->VisiModel->find(1);
		$data['misi'] = $this->MisiModel->find(1);
		$data['validation'] = \Config\Services::validation();
		return view('index', $data);
	}

	public function save()
	{
		if (!$this->validate([
			'name' => 'required',
			'email' => 'required|valid_email',
			'message' => 'required'
		])) {
			// $validation = \Config\Services::validation();
			return redirect()->to('/home/index#contact-us')->withInput();
		}

		$this->HomeModel->save([
			'name' => htmlspecialchars($this->request->getPost('name')),
			'email' => htmlspecialchars($this->request->getPost('email')),
			'message' => htmlspecialchars($this->request->getPost('message'))
		]);
		session()->setFlashdata('message', 'success-send');
		return redirect()->to('/');

		// $email = \Config\Services::email();
		// $email->setFrom('merhkolor@gmail.com', 'Pelanggan');
		// $email->setTo('muhamadjukahpin@gmail.com');
		// $email->setSubject('Order Website');
		// $email->setMessage('Email : ' . htmlspecialchars($this->request->getPost('email')) .
		// 	'<br> Nama : ' . htmlspecialchars($this->request->getPost('name')) .
		// 	'<br> Pesan : ' . htmlspecialchars($this->request->getPost('message')));
		// if (!$email->send()) {
		// 	session()->setFlashdata('message', 'failed-send');
		// 	return redirect()->to('/');
		// } else {
		// 	$this->HomeModel->save([
		// 		'name' => htmlspecialchars($this->request->getPost('name')),
		// 		'email' => htmlspecialchars($this->request->getPost('email')),
		// 		'message' => htmlspecialchars($this->request->getPost('message'))
		// 	]);
		// 	session()->setFlashdata('message', 'success-send');
		// 	return redirect()->to('/');
		// }
	}

	//--------------------------------------------------------------------

}
