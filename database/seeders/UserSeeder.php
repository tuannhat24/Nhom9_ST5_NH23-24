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
                'role' => '1',
                'email' => 'user1@localhost.com',
                'password' => '$2y$10$W9UOPcpC2uRKjCBGxcJEJuoDQ.n/fElEeazgekXVhpmeLbfs/Ij1S'
            ],
            [
                'name' => 'admin',
                'role' => '2',
                'email' => 'admin@localhost.com',
                'password' => '$2y$10$W9UOPcpC2uRKjCBGxcJEJuoDQ.n/fElEeazgekXVhpmeLbfs/Ij1S'
            ],
        ]);
    }
}
