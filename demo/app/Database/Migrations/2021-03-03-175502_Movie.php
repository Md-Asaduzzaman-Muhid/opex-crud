<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Movie extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'name'       => [
					'type'       => 'VARCHAR',
					'constraint' => '100',
			],
			'author'       => [
				'type'       => 'VARCHAR',
				'constraint' => '100',
			],
			'price' => [
					'type' => 'VARCHAR',
					'constraint' => '10',
			],
			'created_at datetime default current_timestamp',
			'updated_at datetime default current_timestamp on update current_timestamp',
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->createTable('movie');
	}

	public function down()
	{
		$this->forge->dropTable('movie');
	}
}
