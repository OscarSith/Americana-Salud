<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->insert([
			'name' => 'Admin',
			'email' => 'admin@nutri.com',
			'password' => bcrypt('admin') //Hash::make(),
		]);
	}
}