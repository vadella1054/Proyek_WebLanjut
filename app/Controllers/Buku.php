<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_buku;

class Buku extends BaseController
{
    public function __construct() {

        $this->M_buku = new M_buku();
    }
    
    public function index()
    {
        session();
		$M_buku = model("M_buku");
        $currentPage = $this->request->getVar('page_buku') ? $this->request->getVar('page_buku') : 1;
        // d($this->request->getVar('keyword'));

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $buku = $this->M_buku->search($keyword);
        } else {
            $buku = $this->M_buku;
        }
        
		$data = [
            'title' => 'Daftar Buku',
			// 'buku' => $M_buku->findAll()
            'buku' => $buku->paginate(4, 'buku'),
            'pager' => $this->M_buku->pager,
            'currentPage' => $currentPage
		];
        return view("buku/index", $data);
    } 

    public function create()
    {
    session();
    $data = [
        'validation' => \Config\Services::validation(),
    ];
    return view("buku/create", $data);
    } 

    public function store() {
        $valid = $this->validate([
            "nama_buku" => [
                "label" => "Nama",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "penulis" => [
                "label" => "Penulis",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],
                
            "penerbit" => [
                "label" => "Penerbit",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "genre" => [
                "label" => "Genre",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "deskripsi_buku" => [
                "label" => "Desc",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "harga_buku" => [
                "label" => "Harga",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],   
        ]);
        # dd($valid);

        if ($valid){
            $data = [
                'nama_buku' => $this->request->getVar('nama_buku'),
                'penulis' => $this->request->getVar("penulis"),
                'penerbit' => $this->request->getVar("penerbit"),
                'genre' => $this->request->getVar("genre"),
                'deskripsi_buku' => $this->request->getVar("deskripsi_buku"),
                'harga_buku' => $this->request->getVar("harga_buku"),
            ];

            $M_buku = model("M_buku");
            $M_buku->insert($data);
            session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
            return redirect()->to(base_url('buku/index'));

        } else {
            return redirect()->to(base_url('buku/create'))->withInput()->with('validation', $this->validator);
        }
    }

    public function edit($id_buku){
		$data = [
            'title' => 'Form Edit Data',
            'validation' => \Config\Services::validation(),
            'post' => $this->M_buku->getPosts($id_buku)
        ];
        return view("buku/edit", $data);
        } 

	public function update($id_buku){
		$valid = $this->validate([
            "nama_buku" => [
                "label" => "Nama",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "penulis" => [
                "label" => "Penulis",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],
                
            "penerbit" => [
                "label" => "Penerbit",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "genre" => [
                "label" => "Genre",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "deskripsi_buku" => [
                "label" => "Desc",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],

            "harga_buku" => [
                "label" => "Harga",
                "rules" => "required",
                "error" => [
                    "required" => "{field} Harus diisi!",
                ]
            ],
		]);

		if ($valid) {
		$this->M_buku->save([
            'id_buku' => $id_buku,
            'nama_buku' => $this->request->getVar('nama_buku'),
            'penulis' => $this->request->getVar("penulis"),
            'penerbit' => $this->request->getVar("penerbit"),
            'genre' => $this->request->getVar("genre"),
            'deskripsi_buku' => $this->request->getVar("deskripsi_buku"),
            'harga_buku' => $this->request->getVar("harga_buku"),
		]);

		session()->setFlashdata('success', 'Data berhasil diubah');
		return redirect()->to(base_url('buku/index'));
		
		}
		else {
			return 'Semua data harus diisi !';

		}
	}

    public function delete($id_buku) {
        $this->M_buku->delete($id_buku);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to(base_url('buku/index'));
    }

}