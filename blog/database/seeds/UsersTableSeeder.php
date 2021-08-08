<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        DB::table('user_pages')->delete();

        DB::table('users')->delete();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Luis',
            'email' => 'dev@mail.com',
            'password' => bcrypt('123456'),
            'admin' => true
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'Usuário comum',
            'email' => 'common@mail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
