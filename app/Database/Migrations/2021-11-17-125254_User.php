<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
{
    $this->forge->addField([
        'id_user'          => [
                'type'           => 'VARCHAR',
                'constraint'     => 11,
                // 'unsigned'       => TRUE,
                // 'auto_increment' => TRUE
        ],
        'username'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
        ],
        'password' => [
                'type'           => 'VARCHAR',
				'constraint'     => '100',
                // 'null'           => TRUE,
        ],
        'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
                // 'null'           => TRUE,
        ],
    ]);
    $this->forge->addKey('id_user', TRUE);
    $this->forge->createTable('user');
} 

    public function down()
    {
        //
    }
}

