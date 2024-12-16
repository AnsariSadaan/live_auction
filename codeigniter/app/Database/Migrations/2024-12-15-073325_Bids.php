<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bids extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'amount' => [
                'type' => 'FLOAT',
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
                'constraint' => 5, // Match the size with Auctions and Users tables
                'unsigned' => true,
            ],
            'UserId' => [
                'type' => 'INT',
                'constraint' => 5, // Match the size with Users table
                'unsigned' => true,
            ]
        ]);
        
        $this->forge->addPrimaryKey('id');
        
        // Add foreign key constraints
        $this->forge->addForeignKey('AuctionId', 'auctions', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('UserId', 'users', 'id', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('bids');
    }

    public function down()
    {
        $this->forge->dropTable('bids');
    }
}
