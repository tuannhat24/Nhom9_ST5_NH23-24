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
                'role' => '1',
                'name' => 'user1',
                'role' => '1',
                'email' => 'user1@localhost.com',
<<<<<<< HEAD
                'password' => '$2y$10$b4Vb8vpRo/3rLwmsBzmK8OeNU2nlSKK7bWguY29EeKynhv7mwekyu'
=======
                'password' => '$2y$10$W9UOPcpC2uRKjCBGxcJEJuoDQ.n/fElEeazgekXVhpmeLbfs/Ij1S'
>>>>>>> ac2d3a3a4d765abe425ffd9eba594fdc5f7b1b2d
            ],
            [
                'role' => '2',
                'name' => 'admin',
                'role' => '2',
                'email' => 'admin@localhost.com',
<<<<<<< HEAD
                'password' => '$2y$10$b4Vb8vpRo/3rLwmsBzmK8OeNU2nlSKK7bWguY29EeKynhv7mwekyu'
=======
                'password' => '$2y$10$W9UOPcpC2uRKjCBGxcJEJuoDQ.n/fElEeazgekXVhpmeLbfs/Ij1S'
>>>>>>> ac2d3a3a4d765abe425ffd9eba594fdc5f7b1b2d
            ],
        ]);
    }
}
