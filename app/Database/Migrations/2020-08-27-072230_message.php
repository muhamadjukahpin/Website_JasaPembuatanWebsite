<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Message extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'email'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'message' => [
				'type'           => 'LONGTEXT',
			],
			'created_at' => [
				'type'			=> 'datetime',
				'null'			=> true,
			],
			'updated_at' => [
				'type'		=> 'datetime',
				'null'		=> true
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('message');
	}

	public function down()
	{
		$this->forge->dropTable('message');
	}
}
