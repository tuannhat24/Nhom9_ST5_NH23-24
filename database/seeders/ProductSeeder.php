<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Ao unisex',
                'description' => 'ao de mac',
                'content' => 'ao cho gioi tre',
                'cate_id' => '1',
                'price' => '140000',
                'price_sale' => '50000',
            ],
            [
                'name' => 'Ao thun full size',
                'description' => 'ao moi loai size',
                'content' => 'ao nam nu mac deu duoc',
                'cate_id' => '1',
                'price' => '90000',
                'price_sale' => '85000',
            ],
            [
                'name' => 'Ghe gaming',
                'description' => 'ghe de ngoi',
                'content' => 'ghe danh cho gaming',
                'cate_id' => '2',
                'price' => '1200000',
                'price_sale' => '999000',
            ],
            [
                'name' => 'Aula f75',
                'description' => 'ban phim nhieu nguoi dung',
                'content' => 'ban phim co xin',
                'cate_id' => '2',
                'price' => '1500000',
                'price_sale' => '1220000',
            ],
            [
                'name' => 'Mai mai la bao xa',
                'description' => 'ban quyen thuoc nha sach genz',
                'content' => 'sach the loai ngon tinh',
                'cate_id' => '3',
                'price' => '220000',
                'price_sale' => '190000',
            ],
            [
                'name' => 'Doraemon',
                'description' => 'doraemon dai tap',
                'content' => 'the loai truyen tranh',
                'cate_id' => '3',
                'price' => '500000',
                'price_sale' => '450000',
            ],
            [
                'name' => 'Vot cau long Yonex',
                'description' => 'Vot danh cau long',
                'content' => 'vot loai hang hieu',
                'cate_id' => '4',
                'price' => '2000000',
                'price_sale' => '1999000',
            ],
            [
                'name' => 'Gay danh Goft',
                'description' => 'gay hang hieu',
                'content' => 'gay Goft cho nha giau',
                'cate_id' => '4',
                'price' => '5000000',
                'price_sale' => '4450000',
            ],
            [
                'name' => 'Nhan ngoc bich',
                'description' => 'nhan mau ngoc bich',
                'content' => 'nhan dinh kem ngoc',
                'cate_id' => '5',
                'price' => '250000',
                'price_sale' => '190000',
            ],
            [
                'name' => 'day chuyen thanh gia',
                'description' => 'day truyen hinh thanh gia',
                'content' => 'the loai theo dao',
                'cate_id' => '5',
                'price' => '160000',
                'price_sale' => '100000',
            ],
        ]);
    }
}
