<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_buku extends Model
{
    protected $table                = 'buku';
	protected $primaryKey           = 'buku_id';
	protected $allowedFields        = ['nama_buku', 'penulis', 'penerbit', 'genre', 'deskripsi_buku', 'harga_buku'];

	public function getPosts($buku_id = false){
		if($buku_id == false) {
			return $this->findAll();
		}
		return $this->where(['buku_id' => $buku_id])->first();
	}
}