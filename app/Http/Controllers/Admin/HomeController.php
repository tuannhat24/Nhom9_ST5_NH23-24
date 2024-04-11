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

        $products = Product::orderBy('id')->paginate($perPage);

        return view('home', [
            'title' => 'Trang sản phẩm',
            'data' => $products,
            'carts' => $carts,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
        ]);
    }
}
