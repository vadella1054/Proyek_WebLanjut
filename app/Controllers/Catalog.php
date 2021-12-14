<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_buku;

class Catalog extends BaseController
{

	public function __construct() {
		$this->M_buku = new M_buku();
    }

	public function index()
    {
		// $currentPage = $this->request->getVar('page_buku') ? $this->request->getVar('page_buku') : 1;

		// $keyword = $this->request->getVar('keyword');
        // if($keyword){
        //     $buku = $this->M_buku->search($keyword);
        // } else {
        //     $buku = $this->M_buku;
        // }

		$data = [
			'title' => "Catalog",
			// 'buku' => $buku->paginate(6, 'buku'),
            // 'pager' => $this->M_buku->pager,
            // 'currentPage' => $currentPage
		];

		$data2['buku'] = $this->M_buku->getPosts();
	
		echo view ('layouts/header', $data);
		echo view ('layouts/navbar');
		echo view ('katalog/index', $data2, $data);
		echo view ('layouts/footer');
    } 

	public function detail($id_buku){

		$data = [
			'title' => "Detail Buku",
			'buku' => $this->M_buku->getPosts($id_buku)
		];
		echo view ('layouts/header', $data);
		echo view ('layouts/navbar');
		return view ('katalog/detail', $data);
		
	}

}
