<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        if ($currentPage >= $totalPages) {
            $currentPage = $totalPages;
        }

        $products = Product::orderBy('id')->paginate($perPage);

        return view('home', [
            'title' => 'Trang sản phẩm',
            'data' => $products,
            'totalPages' => $totalPages,
            'currentPage' => $currentPage,
        ]);
    }
}
