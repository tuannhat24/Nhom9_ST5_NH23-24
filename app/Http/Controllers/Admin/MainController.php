<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    
    
    public function cart(){
        return view('cart', [
            'title' => 'Trang giỏ hàng'
        ]);
    }

    public function product(){
        return view('users/admin/products/product', [
            'title' => 'Quản lý sản phẩm'
        ]);
    }

    public function category(){
        return view('users/admin/categories/category', [
            'title' => 'Quản lý danh mục'
        ]);
    }

    public function customer(){
        return view('users/admin/customers/customer', [
            'title' => 'Quản lý người dùng'
        ]);
    }

    public function listproduct(){
        return view('users/admin/products/listproduct', [
            'title' => 'Danh sách sản phẩm'
        ]);
    }

    public function listcategory(){
        return view('users/admin/categories/listcategory', [
            'title' => 'Danh sách danh mục'
        ]);
    }

    public function listcustomer(){
        return view('users/admin/customers/listcustomer', [
            'title' => 'Danh sách người dùng'
        ]);
    }
}
