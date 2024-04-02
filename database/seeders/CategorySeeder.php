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
                'name' => 'Thoi Trang',
                'parent_id' => '1',
                'description' => 'Thoi trang cho Nam/Nu',
                'content' => 'Xu huong thoi trang hien dai',
                'slug' => '',
            ],
            [
                'name' => 'Thiet bi dien tu',
                'parent_id' => '2',
                'description' => 'Do cong nghe hien dai',
                'content' => 'Gear, Ghe gaming, Ban phim, Man hinh',
                'slug' => '',
            ],
            [
                'name' => 'Gen_z book',
                'parent_id' => '3',
                'description' => 'Nha sach',
                'content' => 'Light Novel, Trinh tham, kinh di, ngon tinh, ...',
                'slug' => '',
            ],
            [
                'name' => 'The Thao',
                'parent_id' => '4',
                'description' => 'Cac do dung the thao',
                'content' => 'Ao, Vot, cac phu kien, ...',
                'slug' => '',
            ],
            [
                'name' => 'Phu kien & trang suc',
                'parent_id' => '5',
                'description' => 'phu kien treo balo, trang suc deo tay, co,..',
                'content' => 'Vong tay, day chuyen, nhan, ...',
                'slug' => '',
            ],
        ]);
    }
}
