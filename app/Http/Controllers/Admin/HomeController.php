<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $perPage = 20;

        $totalProducts = Product::count();

        $totalPages = ceil($totalProducts / $perPage);

        $currentPage = request()->input('page', 1);

        // Truy vấn giỏ hàng
        $carts = Cart::all();

        if ($currentPage >= $totalPages) {
            $currentPage = $totalPages;
        }

        // Truy vấn dữ liệu sản phẩm từ database và sắp xếp theo giá mặc định (id)
        $products = Product::orderBy('id')->paginate($perPage);

        // Nếu có yêu cầu sắp xếp theo giá từ thấp đến cao
        if (request()->has('sort') && request()->input('sort') == 'price_asc') {
            $products = Product::orderBy('price_sale')->paginate($perPage);
        }

        // Nếu có yêu cầu sắp xếp theo giá từ cao đến thấp
        if (request()->has('sort') && request()->input('sort') == 'price_desc') {
            $products = Product::orderByDesc('price_sale')->paginate($perPage);
        }

        return view('home', [
            'title' => 'Trang sản phẩm',
            'data' => $products,
            'carts' => $carts,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
        ]);
    }
}
