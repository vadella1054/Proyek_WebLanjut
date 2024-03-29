<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Buku extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id_buku'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
        ],
        'nama_buku'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'penulis'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
        'penerbit'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
        'genre'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
        'deskripsi_buku' => [
            'type'           => 'VARCHAR',
            'constraint'     => '1000',
        ],
        'harga_buku' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => TRUE,
        ],
        'status'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
        'cover'       => [
            'type'           => 'VARCHAR',
            'constraint'     => '100',
        ],
    ]);
    $this->forge->addKey('id_buku', TRUE);
    $this->forge->createTable('buku');
} 

    public function down()
    {
        //
    }
}

