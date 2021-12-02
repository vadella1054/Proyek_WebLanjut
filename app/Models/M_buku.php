<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class M_buku extends Model
{
    protected $table                = 'buku';
	protected $primaryKey           = 'id_buku';
	protected $allowedFields        = ['id_buku', 'nama_buku', 'penulis', 'penerbit', 'genre', 'deskripsi_buku', 'harga_buku'];

	public function search($keyword){
		// $builder = $this->table('buku');
		// $builder->like('nama_buku', $keyword);
		// return $builder;

		return $this->table('buku')->like('nama_buku', $keyword)->orLike('penulis', $keyword)->orLike('penerbit', $keyword)->orLike('genre', $keyword)->orLike('deskripsi_buku', $keyword);
	}
	
	public function getPosts($id_buku = false){
		if($id_buku == false) {
			return $this->findAll();
		}
		return $this->where(['id_buku' => $id_buku])->first();
	}
}