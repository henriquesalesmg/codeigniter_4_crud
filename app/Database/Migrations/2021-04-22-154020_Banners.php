<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Banners extends Migration
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
				'banner'       => [
						'type'       => 'VARCHAR',
						'constraint' => '255',
				],
				'titulo' => [
						'type' => 'varchar',
						'constraint' => '50',
						'null' => true,
				],
				'descricao' => [
						'type' => 'text',
						'null' => true,
				],
				'ativo' => [
						'type' => 'int',
						'constraint' => '2',
						'null' => true,
						'default' => 1,
				],
				'created_at' => [
						'type' => 'DATETIME',
						'null' => true,
				],
				'updated_at' => [
						'type' => 'DATETIME',
						'null' => true,
				],
				'deleted_at' => [
						'type' => 'DATETIME',
						'null' => true,
				],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('banners');
	}

	public function down()
	{
		$this->forge->dropTable('banners');
	}
}
