<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Banner extends Migration
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
			'title'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 250,
			],
			'isi'       => [
				'type'           => 'LONGTEXT',
			],
			'img'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 250,
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
		$this->forge->createTable('banner');
	}

	public function down()
	{
		$this->forge->dropTable('banner');
	}
}
