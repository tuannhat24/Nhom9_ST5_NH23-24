<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'vulinh',
                'phone' => '0364704715',
                'address' => 'Binh Phuoc',
                'email' => 'linhlg2004@gmail.com',
            ],
            [
                'name' => 'Quang Dinh',
                'phone' => '022222222',
                'address' => 'binh thuan',
                'email' => 'Dinhdang@gmail.com',
            ],
        ]);
    }
}
