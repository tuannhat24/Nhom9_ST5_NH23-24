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
                'name' => 'Quan ong rong',
                'cate_id' => '1',
                'image' => 'quanongrong.png',
                'description' => 'quan',
                'content' => 'quan full size',
                'price' => '140000',
                'price_sale' => '50000',
            ],
            [
                'name' => 'Ao thun full size',
                'cate_id' => '1',
                'image' => 'aothun.png',
                'description' => 'ao moi loai size',
                'content' => 'ao nam nu mac deu duoc',
                'price' => '90000',
                'price_sale' => '85000',
            ],
            [
                'name' => 'Ghe gaming',
                'cate_id' => '2',
                'image' => 'ghegaming.png',
                'description' => 'ghe de ngoi',
                'content' => 'ghe danh cho gaming',
                'price' => '1200000',
                'price_sale' => '999000',
            ],
            [
                'name' => 'Aula f75',
                'cate_id' => '2',
                'image' => 'aulaf75.png',
                'description' => 'ban phim nhieu nguoi dung',
                'content' => 'ban phim co xin',
                'price' => '1500000',
                'price_sale' => '1220000',
            ],
            [
                'name' => 'Mai mai la bao xa',
                'cate_id' => '3',
                'image' => 'maimailabaoxa.png',
                'description' => 'ban quyen thuoc nha sach genz',
                'content' => 'sach the loai ngon tinh',
                'price' => '220000',
                'price_sale' => '190000',
            ],
            [
                'name' => 'Doraemon',
                'cate_id' => '3',
                'image' => 'dora.png',
                'description' => 'doraemon dai tap',
                'content' => 'the loai truyen tranh',
                'price' => '500000',
                'price_sale' => '450000',
            ],
            [
                'name' => 'Vot cau long Yonex',
                'cate_id' => '4',
                'image' => 'vot.png',
                'description' => 'Vot danh cau long',
                'content' => 'vot loai hang hieu',
                'price' => '2000000',
                'price_sale' => '1999000',
            ],
            [
                'name' => 'Gay danh Golf',
                'cate_id' => '4',
                'image' => 'gay.png',
                'description' => 'gay hang hieu',
                'content' => 'gay Golf cho nha giau',
                'price' => '5000000',
                'price_sale' => '4450000',
            ],
            [
                'name' => 'Nhan ngoc bich',
                'cate_id' => '5',
                'image' => 'nhan.png',
                'description' => 'nhan mau ngoc bich',
                'content' => 'nhan dinh kem ngoc',
                'price' => '250000',
                'price_sale' => '190000',
            ],
            [
                'name' => 'day chuyen thanh gia',
                'cate_id' => '5',
                'image' => 'daychuyen.png',
                'description' => 'day truyen hinh thanh gia',
                'content' => 'the loai theo dao',
                'price' => '160000',
                'price_sale' => '100000',
            ],
        ]);
    }
}
