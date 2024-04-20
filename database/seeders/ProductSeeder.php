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
                'name' => 'Quần tây nam, quần âu ống rộng',
                'cate_id' => '1',
                'image' => 'Quantaynam.png',
                'description' => 'quần tây nam ống rộng',
                'price' => '140000',
                'price_sale' => '50000',
                'quantity_sold' => '2376',
            ],
            [
                'name' => 'Quần jean ống suông',
                'cate_id' => '1',
                'image' => 'Quanjeanongsuong.png',
                'description' => 'quần jean',
                'price' => '90000',
                'price_sale' => '85000',
                'quantity_sold' => '278',
            ],
            [
                'name' => 'Áo thun simon skeleten',
                'cate_id' => '2',
                'image' => 'aothunskeleten.png',
                'description' => 'ao thun in hình',
                'price' => '1200000',
                'price_sale' => '999000',
                'quantity_sold' => '121',
            ],
            [
                'name' => 'Áo thun cổ tròn unisex ulzzang',
                'cate_id' => '2',
                'image' => 'aothuncotron.png',
                'description' => 'ao thun unisex cổ tròn',
                'price' => '1500000',
                'price_sale' => '1220000',
                'quantity_sold' => '1098',
            ],
            [
                'name' => 'Giày thể thao nam nữ AF1 In Nổi Họa Tiết',
                'cate_id' => '3',
                'image' => 'giayAF1nike.png',
                'description' => 'giày thể thao AF1_nike',
                'price' => '220000',
                'price_sale' => '190000',
                'quantity_sold' => '2045',
            ],
            [
                'name' => 'Bonnie Cathy Thời Trang Giày Thể Thao Nam Thoáng Khí Năng Động',
                'cate_id' => '3',
                'image' => 'bonniecathy.png',
                'description' => 'giày cũng là thể thao',
                'price' => '500000',
                'price_sale' => '450000',
                'quantity_sold' => '8648',
            ],
            [
                'name' => 'Áo khoác gió nam-nữ 2 lớp có túi trong, Áo khoác dù chất liệu vải gió',
                'cate_id' => '4',
                'image' => 'Aokhoacdu.png',
                'description' => 'áo khoác gió',
                'price' => '2000000',
                'price_sale' => '1999000',
                'quantity_sold' => '1985',
            ],
            [
                'name' => 'Áo khoác dù jacket nam, vải dù 2 lớp có túi trong form rộng',
                'cate_id' => '4',
                'image' => 'aokhoacdujacket.png',
                'description' => 'áo khoác dù vải dày',
                'price' => '5000000',
                'price_sale' => '4450000',
                'quantity_sold' => '2779',
            ],
            [
                'name' => 'Nhẫn Nam Nữ Unisex Nhẫn Titan Thời Trang',
                'cate_id' => '5',
                'image' => 'nhantitanunisex.png',
                'description' => 'nhẫn unisex đẹp',
                'price' => '250000',
                'price_sale' => '190000',
                'quantity_sold' => '10829',
            ],
            [
                'name' => 'Nhẫn thép titan 4mm thiết kế đơn giản thời trang cho nam và nữ',
                'cate_id' => '5',
                'image' => 'nhanthep4mm.png',
                'description' => 'nhẫn titan đơn giản',
                'price' => '160000',
                'price_sale' => '100000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần thể thao 2 sọc nam nữ cao cấp logo "ESSENTIALS", Quần ống rộng dáng suông chất vải Xleo chống nhăn, không xù lông',
                'cate_id' => '1',
                'image' => 'Quanthethao2soc.png',
                'description' => 'quần 2 sọc',
                'price' => '160000',
                'price_sale' => '100000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần short Kaki nam ngắn, quần đùi nam kaki lưng đai thun',
                'cate_id' => '1',
                'image' => 'quanshortkakingan.png',
                'description' => 'quần kaki ngắn',
                'price' => '160000',
                'price_sale' => '100000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo sơ mi nam Basic chất kaki cao cấp cực đẹp',
                'cate_id' => '2',
                'image' => 'AosominamBasic.png',
                'description' => 'sơ mi basic',
                'price' => '60000',
                'price_sale' => '100000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo thun nữ cộc tay nhún eo vạt chéo xoắn Eo Cổ Tròn',
                'cate_id' => '2',
                'image' => 'aothunnucoctay.png',
                'description' => 'thun nữ cộc tay',
                'price' => '60000',
                'price_sale' => '35000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Dép Sandal eva Mềm Đế Dày Thời Trang Mùa Hè Chất Lượng Cao Cho Nam Và Nữ',
                'cate_id' => '3',
                'image' => 'depsandaleva.png',
                'description' => 'dép sandal eva',
                'price' => '49000',
                'price_sale' => '100000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Dép thời trang hai quai mẫu mới nhất 2023',
                'cate_id' => '3',
                'image' => 'dephaiquai2023.png',
                'description' => 'dép hai quai',
                'price' => '117000',
                'price_sale' => '100000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Hoodie Zip - Áo Khoác Nỉ Khóa Kéo Form Rộng Unisex Phối kẻ Sọc Trơn',
                'cate_id' => '4',
                'image' => 'hoodiezip.png',
                'description' => 'hoodie Nỉ',
                'price' => '220000',
                'price_sale' => '160600',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo khoác jean nam Vesast form rộng màu đen mẫu mới độc đáo',
                'cate_id' => '4',
                'image' => 'aokhoacjeanVesast.png',
                'description' => 'áo khoác jean Vesast',
                'price' => '249000',
                'price_sale' => '189000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Bông Tai Titan Khuyên Tai nam nữ tròn dạng kẹp hoặc gài xỏ Karin Accessories màu bạc đen đơn giản đẹp',
                'cate_id' => '5',
                'image' => 'bongtai.png',
                'description' => 'bông tai đơn giản đẹp',
                'price' => '41000',
                'price_sale' => '29000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Khuyên tai nam nữ titan xỏ lỗ thép titan không gỉ Migin bông tai titan thời trang unisex cá tính',
                'cate_id' => '5',
                'image' => 'khuyentaiMigin.png',
                'description' => 'khuyên titan không gỉ',
                'price' => '32000',
                'price_sale' => '29000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần jeans nữ ống loe co giãn, quần bò jean nữ ống đứng rộng suông CẠP CAO',
                'cate_id' => '1',
                'image' => 'quanjeannuongloe.png',
                'description' => 'jeans nữ ống loe',
                'price' => '210000',
                'price_sale' => '89000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần Kẻ Caro dáng suông ống rộng, chất thô mềm',
                'cate_id' => '1',
                'image' => 'quankecaro.png',
                'description' => 'quần caro',
                'price' => '110000',
                'price_sale' => '89250',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo thun 3158 chất cotton khô thoáng mát, form rộng tay lỡ THE ONE',
                'cate_id' => '2',
                'image' => 'thun3158.png',
                'description' => 'áo chất liệu cotton',
                'price' => '70000',
                'price_sale' => '59000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Thun Tay Lỡ From Rộng Cổ Polo',
                'cate_id' => '2',
                'image' => 'aothuncoPolo.png',
                'description' => 'thun tay lỡ',
                'price' => '100000',
                'price_sale' => '85000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Giày Conversee ChuckTaylor 1970s Đen Trắng Cổ Thấp,Giày CV Nam Nữ Cổ Thấp Hai Màu Đen-Trắng',
                'cate_id' => '3',
                'image' => 'giayconversee.png',
                'description' => 'Converse',
                'price' => '790000',
                'price_sale' => '399000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Giày nam SEA vải thoáng khí thể thao chạy bộ thể dục',
                'cate_id' => '3',
                'image' => 'giaynamSeavt.png',
                'description' => 'giày chạy bộ',
                'price' => '220000',
                'price_sale' => '124000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Khoác Gió Nam Nữ MẠNH HƯỜNG 2 Lớp Tráng Bạc Chống Nước Chống Gió',
                'cate_id' => '4',
                'image' => 'aokhoac2lop.png',
                'description' => 'áo khoác gió chống nước',
                'price' => '249000',
                'price_sale' => '99000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Hoodie nam nữ form to nỉ',
                'cate_id' => '4',
                'image' => 'hoodieformto.png',
                'description' => 'hoodie form to',
                'price' => '280000',
                'price_sale' => '99000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Nhẫn Cú Bạc 925',
                'cate_id' => '5',
                'image' => 'nhancubac.png',
                'description' => 'cú bac mắt xanh',
                'price' => '20000',
                'price_sale' => '18500',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Nhẫn hình rồng bằng thép không gỉ',
                'cate_id' => '5',
                'image' => 'nhanhinhrong.png',
                'description' => 'rồng màu bạc',
                'price' => '20000',
                'price_sale' => '18000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần âu nam ống côn NPV vải lụa hàn co giãn,quần tây nam không nhăn không xù',
                'cate_id' => '1',
                'image' => 'quanauongcon.png',
                'description' => 'quần ống côn',
                'price' => '198000',
                'price_sale' => '125000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần túi hộp ống rộng nam nữ The Heaven kaki cotton, dài, dây rút quần jogger',
                'cate_id' => '1',
                'image' => 'quantuihop.png',
                'description' => 'quần túi hộp',
                'price' => '280000',
                'price_sale' => '179000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Polo Phối cổ SPION Local Brand polo unisex nam nữ oversize',
                'cate_id' => '2',
                'image' => 'aopoloSpion.png',
                'description' => 'áo polo local brand',
                'price' => '190000',
                'price_sale' => '80000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo sơ mi nam nữ dài tay Unisex Basic màu trắng và đen sơ mi lụa mịn mát form rộng suông',
                'cate_id' => '2',
                'image' => 'aosomidaitay.png',
                'description' => 'somi tay dài',
                'price' => '300000',
                'price_sale' => '179000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Giày Sneaker cổ cao Converse Chuck 70 ATCX Black White ',
                'cate_id' => '3',
                'image' => 'sneakercocao.png',
                'description' => 'sneaker cổ cao',
                'price' => '700000',
                'price_sale' => '539000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Dép Da Nam Hot Nhất Dép Nam Quai Ngang',
                'cate_id' => '3',
                'image' => 'depdanam.png',
                'description' => 'dép da',
                'price' => '308000',
                'price_sale' => '218900',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Hanlu Áo Khoác Giả Da Có Mũ Trùm Đầu Chất Lượng Cao Cho Nam',
                'cate_id' => '4',
                'image' => 'aokhoacgiada.png',
                'description' => 'áo khoác giả da',
                'price' => '872000',
                'price_sale' => '436000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo phao nam nữ hàn quốc fom rộng',
                'cate_id' => '4',
                'image' => 'aophao.png',
                'description' => 'áo như áo phao hàn',
                'price' => '350000',
                'price_sale' => '259000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Vòng cổ Mặt Đầu Lâu Phong Cách Gothic Nhật Bản Cho Nam',
                'cate_id' => '5',
                'image' => 'daychuyenquy.png',
                'description' => 'dây chuyền mặt quỷ',
                'price' => '20088',
                'price_sale' => '16000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Dây Chuyền Thiết Kế Mặt Ngôi Sao Phong Cách Hip Hop Hàn Quốc',
                'cate_id' => '5',
                'image' => 'daychuyenngoisao.png',
                'description' => 'dây chuyền hình ngôi sao',
                'price' => '20000',
                'price_sale' => '15000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần Ống Rộng Nữ Vải Đũi Mát Quảng Châu',
                'cate_id' => '1',
                'image' => 'quannuvaidui.png',
                'description' => 'quần đũi',
                'price' => '160000',
                'price_sale' => '85000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Quần Jogger Túi Hộp Dáng Suông, Jogger, Giả Yếm , Chất vải dày co giãn hàng xuất dư',
                'cate_id' => '1',
                'image' => 'quanjogger.png',
                'description' => 'quần jogger ',
                'price' => '215000',
                'price_sale' => '145000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi ESEA Tay Dài Phong Cách Trung Hoa',
                'cate_id' => '2',
                'image' => 'aosomitrunghoa.png',
                'description' => 'sơ mi phong cách trung hoa',
                'price' => '305000',
                'price_sale' => '175000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi Tay Dài Dáng Rộng Phong Cách retro',
                'cate_id' => '2',
                'image' => 'somiRetro.png',
                'description' => 'sơ mi retro',
                'price' => '263000',
                'price_sale' => '158000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Dép Xăng đan 3 quai nam và nữ FiLing cao cấp , quai hậu gót có thể tháo rời',
                'cate_id' => '3',
                'image' => 'dep3quai.png',
                'description' => 'dép 3 quai',
                'price' => '200000',
                'price_sale' => '99000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Giày Jordan cao cổ, Giày thể thao nam nữ',
                'cate_id' => '3',
                'image' => 'jordan.png',
                'description' => ' giày jordan',
                'price' => '285000',
                'price_sale' => '270000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo khoác dạ nam nữ cổ bẻ from rộng phối màu tương phản, khoá kéo chất dạ ép lì dày dặn ấm áp phong cách hàn quốc',
                'cate_id' => '4',
                'image' => 'aokhoacpchanquoc.png',
                'description' => 'áo khoác dạ',
                'price' => '380000',
                'price_sale' => '199000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'spraying áo khoác dạ áo dạ dáng dài Fashion trendy New Style Korean',
                'cate_id' => '4',
                'image' => 'aokhoacdadangdai.png',
                'description' => 'áo khoác dáng dài',
                'price' => '548333',
                'price_sale' => '405000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Vòng Tay Da Bện Phối Thép Không Gỉ Phong Cách vintage Cho Nam',
                'cate_id' => '5',
                'image' => 'vongtayda.png',
                'description' => 'vòng tay đẹp',
                'price' => '57000',
                'price_sale' => '32000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Vòng tay nam cá voi whale may mắn Minco Accessories Lắc Tay Nam Chất Liệu Dây Bền Bỉ phong cách độc lạ',
                'cate_id' => '5',
                'image' => 'vongtaycavoi.png',
                'description' => 'vòng tay đuôi cá voi',
                'price' => '41000',
                'price_sale' => '35000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi ESEA Tay Dài Phong Cách Trung ',
                'cate_id' => '2',
                'image' => 'aosomitrunghoa.png',
                'description' => 'sơ mi phong cách trung hoa',
                'price' => '305000',
                'price_sale' => '175000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi ESEA Tay Dài Phong Cách  Hoa',
                'cate_id' => '2',
                'image' => 'aosomitrunghoa.png',
                'description' => 'sơ mi phong cách trung hoa',
                'price' => '305000',
                'price_sale' => '175000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi ESEA Tay Dài Phong  Trung Hoa',
                'cate_id' => '2',
                'image' => 'aosomitrunghoa.png',
                'description' => 'sơ mi phong cách trung hoa',
                'price' => '305000',
                'price_sale' => '175000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi ESEA Tay Dài  Cách Trung Hoa',
                'cate_id' => '2',
                'image' => 'aosomitrunghoa.png',
                'description' => 'sơ mi phong cách trung hoa',
                'price' => '305000',
                'price_sale' => '175000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi ESEA Tay  Phong Cách Trung Hoa',
                'cate_id' => '2',
                'image' => 'aosomitrunghoa.png',
                'description' => 'sơ mi phong cách trung hoa',
                'price' => '305000',
                'price_sale' => '175000',
                'quantity_sold' => '234',
            ],
            [
                'name' => 'Áo Sơ Mi ESEA  Dài Phong Cách Trung Hoa',
                'cate_id' => '2',
                'image' => 'aosomitrunghoa.png',
                'description' => 'sơ mi phong cách trung hoa',
                'price' => '305000',
                'price_sale' => '175000',
                'quantity_sold' => '234',
            ]
        ]);
    }
}
