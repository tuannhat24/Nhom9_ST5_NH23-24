<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'user1',
                'email' => 'user1@localhost.com',
                'password' => 'user123'
            ],
            [
                'name' => 'admin',
                'email' => 'admin@localhost.com',
                'password' => '123456'
            ],
        ]);
    }
}
