<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		DB::table('users')->delete();
		
		User::create(array(
			'username'=>'anthony',
			'password'=>Hash::make('freedom')
		));

		User::create(array(
			'username'=>'ray',
			'password'=>Hash::make('fighter')
		));
	}
}
