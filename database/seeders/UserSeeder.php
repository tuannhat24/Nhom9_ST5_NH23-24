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
                'password' => '$2y$10$b4Vb8vpRo/3rLwmsBzmK8OeNU2nlSKK7bWguY29EeKynhv7mwekyu',
            ],
            [
                'role' => '2',
                'name' => 'admin',
                'role' => '2',
                'email' => 'admin@localhost.com',
                'password' => '$2y$10$b4Vb8vpRo/3rLwmsBzmK8OeNU2nlSKK7bWguY29EeKynhv7mwekyu',
            ],
        ]);
    }
}
