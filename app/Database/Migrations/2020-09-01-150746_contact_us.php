<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ContactUs extends Migration
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
				'constraint'     => 250,
			],
			'number'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 25,
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
		$this->forge->createTable('contact_us');
	}

	public function down()
	{
		$this->forge->dropTable('contact_us');
	}
}
