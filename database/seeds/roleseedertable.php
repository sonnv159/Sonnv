<?php

use Illuminate\Database\Seeder;

class roleseedertable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	[
        		'role_name'	=> 'admin'
        	],
        	[
        		'role_name'	=> 'author'
        	],
        	[
        		'role_name'	=> 'customer'
        	]
        	]);
    }
}