<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            [
                'id'          => 1,
                'email'       => 'dada@su.com',
                'password'    => bcrypt('secret'),
                'name'        => 'Super User',
                'web'         => 'superadmin',
                'created_at'  => '2018-09-15',
            ],
            [
                'id'          => 2,
                'email'       => 'dada@admin.com',
                'password'    => bcrypt('secret'),
                'name'        => 'Admin',
                'web'         => 'admin',
                'created_at'  => '2018-09-15',
            ],
            [
                'id'          => 3,
                'email'       => 'dada@user.com',
                'password'    => bcrypt('secret'),
                'name'        => 'User',
                'web'         => 'user',
                'created_at'  => '2018-09-15',
            ],
        ]);
    }
}
