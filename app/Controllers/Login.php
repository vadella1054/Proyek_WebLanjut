<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\M_user;

class Login extends BaseController
{

    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('form_login', $data);
        
    } 

    public function auth()
    {

        helper(['form']);
		//set rules validation form
		$rules = [
			"username" => [
				"label" => "Username",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
            ],
            "password" => [
				"label" => "Password",
				"rules" => "required",
				"errors" => [
					"required" => "{field} Harus Diisi!",
				]
			]
		];

        if($this->validate($rules)){
            $session = session();
            $model = new M_user();
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');
            $data = $model->where('username', $username)->first();
            if($data){
                $pass = $data['password'];
                $verify_pass = password_verify($password, $pass);
                if($verify_pass){
                    $ses_data = [
                        'username'  => $data['username'],
                        'email'     => $data['email'],
                        'logged_in' => TRUE
                    ];
                    $session->set($ses_data);
                    $session->setFlashdata('success', 'Login Berhasil');
                    return redirect()->to('/buku/index');
                }else{
                    $session->setFlashdata('pesan', 'Password Salah!!!');
                    return redirect()->to('/login');
                }
            }else{
                $session->setFlashdata('pesan', 'Username belum terdaftar!!');
                return redirect()->to('/login');
            }
        }
        else{
            $data['validation'] = $this->validator;
			echo view('form_login', $data);
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }

}