<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function product(){
        return view('users/admin/products/product', [
            'title' => 'ADD PRODUCT'
        ]);
    }

    public function category(){
        return view('users/admin/categories/category', [
            'title' => 'ADD CATEGORY'
        ]);
    }

    public function customer(){
        return view('users/admin/customers/customer', [
            'title' => 'Quản lý người dùng'
        ]);
    }

    public function listProduct(){
        return view('users/admin/products/listproduct', [
            'title' => 'Danh sách sản phẩm'
        ]);
    }

    public function listCategory(){
        return view('users/admin/categories/listcategory', [
            'title' => 'Danh sách danh mục'
        ]);
    }

    public function listCustomer(){
        return view('users/admin/customers/listcustomer', [
            'title' => 'Danh sách người dùng'
        ]);
    }
}
