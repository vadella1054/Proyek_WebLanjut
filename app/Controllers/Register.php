<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\M_user;

class Register extends BaseController
{
	public function index()
	{
		//include helper form
		helper(['form']);
		$data = [];
		echo view('register', $data);
	}

	public function save()
	{
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			"username" => [
				"label" => "Username",
				"rules" => "required|is_unique[user.username]",
				"errors" => [
					"required" => "{field} Harus Diisi!",
					"is_unique" => "{field} Sudah dipakai",
				]
            ],
            "password" => [
				"label" => "Password",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			],
			'email' 		=> [
				"label" => "Email",
				"rules" => 'required|min_length[4]|max_length[50]|valid_email|is_unique[user.email]',
				"errors" => [
					"valid_email" => "Kolom {field} harus diisi dengan email yang valid",
					"required" => "{field} Harus Diisi!",
					"is_unique" => "{field} Sudah Terdaftar.",
				]
			],
			'confpassword' 	=> [
				"label" => "Konfirmasi Password",
				"rules" => 'required|matches[password]',
				"errors" => [
					"required" => "{field} Harus Diisi!",
					'matches' => "Konfirmasi password tidak sama",
				]
			]
		];

		if($this->validate($rules)){
			$session = session();
			$model = new M_user();
			$data = [
				'email' 	=> $this->request->getVar('email'),
				'username' 	=> $this->request->getVar('username'),
				'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
				'confpassword' 	=> password_hash($this->request->getVar('confpassword'), PASSWORD_DEFAULT)
			];
			$model->save($data);
			$session->setFlashdata('success', 'Registrasi Berhasil');
			return redirect()->to('/login');
		}else{
			$data['validation'] = $this->validator;
			echo view('register', $data);
		}
		
	}

}