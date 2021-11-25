<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_buku;

class Buku extends BaseController
{
    public function __construct() {
 
        // Mendeklarasikan class BukuModel menggunakan $this->tokobuku
        $this->M_buku = new M_buku();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Tokobuku
        */
    }
 
    public function index()
    {
		$M_buku = model("M_buku");
		$data = [
			'buku' => $M_buku->findAll()
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

public function store()
{
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
        session()->setFlashdata('success', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('buku/index'));

    } else {
        return redirect()->to(base_url('buku/create'))->withInput()->with('validation', $this->validator);
    }
}

}