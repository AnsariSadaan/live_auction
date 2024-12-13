<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Auctions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'image' => [
                'type'=> 'TEXT',
            ],
            'base_price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'start_time' => [
                'type' => 'DATETIME',
            ],
            'end_time' => [
                'type' => 'DATETIME',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('auctions');
    }

    public function down()
    {
        $this->forge->dropTable('auctions');
    }
}
