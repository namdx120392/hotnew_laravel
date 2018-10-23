<?php

use Illuminate\Database\Seeder;
class UserSeeder extends Seeder
{
    public function run()
    {
    	DB::table('users')->delete();
        DB::table('users')->insert([
        	'id'=> 1,
			'name' => 'admin',
			'password' => Hash::make('admin'),
			'username' => 'admin',
			'email' => 'admin@gmail.com',
            'admin' => 1
		]);
    }
}
