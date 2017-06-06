<?php

use Illuminate\Database\Seeder;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        // 		'username' 		=>'superadmin',
        // 		'password' 		=> bcrypt('12345'),
        // 		'role_id' 		=>1,
        // 		'created_at'	=> new DateTime()
        // 	]);

        factory(App\Models\User::class,5)->create();
    }
}
