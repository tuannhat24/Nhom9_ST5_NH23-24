<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        // Số phần tử trên mỗi trang
        $perPage = 10;

        // Lấy tổng số sản phẩm từ database
        $totalProducts = Product::count();

        // Tính toán tổng số trang dựa trên số lượng sản phẩm và số phần tử trên mỗi trang
        $totalPages = ceil($totalProducts / $perPage);

        // Lấy trang hiện tại từ request hoặc sử dụng trang mặc định là 1
        $currentPage = request()->input('page', 1);

        // Nếu trang hiện tại lớn hơn hoặc bằng tổng số trang, đặt trang hiện tại là trang cuối cùng
        if ($currentPage >= $totalPages) {
            $currentPage = $totalPages;
        }

        // Lấy dữ liệu từ database và phân trang
        $products = Product::orderBy('id')->paginate($perPage);

        // Trả về view với dữ liệu cần thiết
        return view('home', [
            'title' => 'Trang sản phẩm',
            'data' => $products,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
        ]);
    }
}
