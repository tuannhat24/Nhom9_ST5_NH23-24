<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Trang sản phẩm'
        ]);
    }
    
    public function cart(){
        return view('cart', [
            'title' => 'Trang giỏ hàng'
        ]);
    }

    public function detail(){
        return view('detail', [
            'title' => 'Trang chi tiết sản phẩm'
        ]);
    }

    public function product(){
        return view('users/admin/products/product', [
            'title' => 'Trang chi tiết sản phẩm'
        ]);
    }
}
