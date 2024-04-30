<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Quần',
                'parent_id' => '0',
                'description' => 'Các loại quần',
                'slug' => '',
                'image' => '',
            ],
            [
                'name' => 'Áo',
                'parent_id' => '0',
                'description' => 'Các loại áo',
                'slug' => '',
                'image' => '',
            ],
            [
                'name' => 'Giày & dép',
                'parent_id' => '0',
                'description' => 'tất cả giày & dép',
                'slug' => '',
                'image' => '',
            ],
            [
                'name' => 'Áo khoác',
                'parent_id' => '0',
                'description' => 'Các loại áo khoác',
                'slug' => '',
                'image' => '',
            ],
            [
                'name' => 'Phụ kiện & trang sức',
                'parent_id' => '0',
                'description' => 'Các loại nón',
                'slug' => '',
                'image' => '',
            ],
        ]);
    }
}
