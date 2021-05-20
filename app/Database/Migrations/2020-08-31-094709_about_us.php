<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AboutUs extends Migration
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
			'text'       => [
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
		$this->forge->createTable('about_us');
	}

	public function down()
	{
		$this->forge->dropTable('about_us');
	}
}
