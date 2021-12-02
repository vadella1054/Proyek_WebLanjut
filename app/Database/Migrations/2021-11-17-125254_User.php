<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
{
    $this->forge->addField([
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
    $this->forge->addKey('username', TRUE);
    $this->forge->createTable('user');
} 

    public function down()
    {
        //
    }
}

