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
        'deskripsi_buku' => [
                'type'           => 'TEXT',
                'null'           => TRUE,
        ],
        'harga_buku' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'null'           => TRUE,
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

