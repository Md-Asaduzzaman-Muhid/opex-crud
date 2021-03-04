<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Movies extends Seeder
{
	public function run()
	{
		$movies= array(
			'name' => 'Kothao keo nai',
			'author' => 'muhid',
			'price' => '120.5'
		);
		$this->db->table('movie')->insert($movies);
	}
}
