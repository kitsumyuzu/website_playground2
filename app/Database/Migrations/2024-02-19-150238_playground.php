<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Playground extends Migration
{
	public function up()
	{
		// Checking if the migration is already exist, if its exist then drop the table

			$this->forge->dropTable('playground', true);

		// Create new fields for the migration

			$this->forge->addField([
				'id_playground' => [
					'type' => 'INT',
					'constraint' => 10,
					'unsigned' => true,
					'auto_increment' => true
				],
				'nama_anak' => [
					'type' => 'VARCHAR',
					'constraint' => 255,
					'null' => true
				],
				'nama_ortu' => [
					'type' => 'VARCHAR',
					'constraint' => 255,
					'null' => true
				],
				'nomor_anak' => [
					'type' => 'VARCHAR',
					'constraint' => 20,
					'null' => true
				],
				'jam_mulai datetime default current_timestamp',
				'jam_selesai' => [
					'type' => 'DATETIME',
					'null' => true
				],
				'status' => [
					'type' => 'ENUM',
					'constraint' => ['selesai', 'sedang bermain'],
					'default' => 'sedang bermain'
				],
				'harga' => [
					'type' => 'VARCHAR',
					'constraint' => 255,
					'default' => 0,
					'null' => true
				]
			]);

		$this->forge->addKey('id_playground', true);
		$this->forge->createTable('playground', true);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('playground', true);
	}
}
