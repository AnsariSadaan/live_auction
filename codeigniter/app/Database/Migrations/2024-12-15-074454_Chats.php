<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Chats extends Migration
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
            'message' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'createdAt' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updatedAt' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'AuctionId' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'UserId' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        
        // Adding foreign keys
        $this->forge->addForeignKey('AuctionId', 'auctions', 'id', 'SET NULL', 'CASCADE');
        $this->forge->addForeignKey('UserId', 'users', 'id', 'SET NULL', 'CASCADE');
        
        // Create the table
        $this->forge->createTable('chats');
    }

    public function down()
    {
        $this->forge->dropTable('chats');
    }
}
