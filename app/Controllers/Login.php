<?php

namespace App\Controllers;
use App\Models\M_user;

class Login extends BaseController
{
	public function index()
	{
		return view('form_login');
	}

    public function login_action()
	{
		$usermodel = new M_user();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $cek = $usermodel->get_user($username, $password);

        if (($cek['username'] == $username) && ($cek['password'] == $password)) {
            session()->set('username', $cek['username']);
            session()->set('email', $cek['email']);
            session()->set('id_user', $cek['id_user']);
            return redirect()->to(base_url('user'));
        } else {
            session()->setFlashdata('gagal', 'Username / Password salah');
            return redirect()->to(base_url('login'));
      }
	}

    public function logout() {
      session()->destroy();
      return redirect()->to(base_url('login'));
    }

}