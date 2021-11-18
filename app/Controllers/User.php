<?php

namespace App\Controllers;

class User extends BaseController
{
   public function index()
   {
      if (session()->get('username') == '') {
         session()->setFlashdata('gagal', 'Anda belum login');
         return redirect()->to(base_url('login'));
      }
      return view('v_dashboard');
   }

}