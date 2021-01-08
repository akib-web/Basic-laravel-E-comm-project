<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users =  [
            [
              'name' => 'Super Admin',
              'email' => 'superadmin@gmail.com',
              'password'=>Hash::make('12345'),
            ],
            [
              'name' => 'Account Admin',
              'email' => 'accountadmin@gmail.com',
              'password'=>Hash::make('12345'),
            ],
            [
              'name' => 'Project Admin',
              'email' => 'projectadmin@gmail.com',
              'password'=>Hash::make('12345'),
            ],
            [
              'name' => 'Client',
              'email' => 'client@gmail.com',
              'password'=>Hash::make('12345'),
            ]
          ];

        DB::table('users')->insert($users);

    }
}
