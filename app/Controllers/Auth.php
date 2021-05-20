<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    protected $AuthModel;

    public function __construct()
    {
        $this->AuthModel = new AuthModel();
    }
    public function login()
    {
        if (session()->has('email')) {
            return redirect()->to('admin');
        }
        $data['title'] = 'Login';
        $data['validation'] = \Config\Services::validation();
        return view('auth/login', $data);
    }

    public function go()
    {
        if (!$this->validate([
            'email' => 'required|valid_email',
            'password' => 'required'
        ])) {
            return redirect()->to('/login')->withInput();
        }

        $email = $this->request->getPost('email');
        $user = $this->AuthModel->where('email', $email)->first();
        $inputPassword = $this->request->getPost('password');
        $password = $user['password'];

        if (!$user) {
            session()->setFlashdata('messages', 'The email you entered is wrong');
            return redirect()->to('/login');
        } else if (!password_verify($inputPassword, $password)) {
            session()->setFlashdata('messages', 'Password you entered is wrong');
            return redirect()->to('/login');
        } else {
            session()->setFlashdata('message', 'success-login');
            session()->set('email', $email);
            return redirect()->to('/admin');
        }
    }

    public function register()
    {
        if (!session()->has('email')) {
            return redirect()->to('/');
        }
        $data['title'] = 'Registration';
        $data['validation'] = \Config\Services::validation();
        return view('auth/register', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'name' => 'required',
            'email' => 'required|valid_email',
            'password1' => 'required|matches[password2]',
            'password2' => 'required|matches[password1]',
        ])) {
            return redirect()->to('/register')->withInput();
        }

        $password = $this->request->getPost('password1');
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $this->AuthModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $passwordHash
        ]);

        session()->setFlashdata('message', 'success-register');
        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->remove('email');
        session()->setFlashdata('message', 'success-logout');
        return redirect()->to('/');
    }
}
