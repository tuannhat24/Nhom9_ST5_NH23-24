<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;

class PurchaseController extends Controller
{
    public function index()
    {
        $title = "Đơn Mua";

        // Truy vấn dữ liệu sản phẩm từ database
        $products = Product::orderBy('id');

        // Truy vấn thông tin của người dùng hiện tại
        $currentUser = auth()->user();

        // Lấy giỏ hàng của người dùng hiện tại
        $carts = Cart::where('customer_id', $currentUser->customer_id)->get();

        return view('purchase', compact(
            'title',
            'carts',
            'currentUser',
        ));
    }
}
