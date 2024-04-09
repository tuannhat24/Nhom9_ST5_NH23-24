<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function Product(){
        return view('users/admin/products/product', [
            'title' => 'Quản lý sản phẩm'
        ]);
    }

    public function Category(){
        return view('users/admin/categories/category', [
            'title' => 'Quản lý danh mục'
        ]);
    }

    public function Customer(){
        return view('users/admin/customers/customer', [
            'title' => 'Quản lý người dùng'
        ]);
    }

    public function ListProduct(){
        return view('users/admin/products/listproduct', [
            'title' => 'Danh sách sản phẩm'
        ]);
    }

    public function ListCategory(){
        return view('users/admin/categories/listcategory', [
            'title' => 'Danh sách danh mục'
        ]);
    }

    public function ListCustomer(){
        return view('users/admin/customers/listcustomer', [
            'title' => 'Danh sách người dùng'
        ]);
    }
}
