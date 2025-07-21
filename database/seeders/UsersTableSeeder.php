<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRoleId = DB::table('roles')->where('name', 'admin')->value('id');

        DB::table('users')->insert([
            'username'       => 'adminuser',
            'email'          => 'admin@example.com',
            'firstname'      => 'Admin',
            'lastname'       => 'User',
            'plain_password' => 'password',
            'password'       => Hash::make('password'),
            'role_id'        => $adminRoleId,
            'created_at'     => Carbon::now(),
            'updated_at'     => Carbon::now(),
        ]);
    }
}
