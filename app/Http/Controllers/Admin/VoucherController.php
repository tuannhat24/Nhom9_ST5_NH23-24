<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;

class VoucherController extends Controller
{
    public function index()
    {
        $title = "Tài Khoản";

        // Truy vấn thông tin của người dùng hiện tại
        $currentUser = auth()->user();

        // Truy vấn giỏ hàng
        $carts = Cart::all();

        // Lấy giỏ hàng của người dùng hiện tại
        $carts = Cart::where('customer_id', $currentUser->customer_id)->get();

        return view('voucher', compact(
            'title',
            'currentUser',
            'carts',
            'currentUser',
        ));
    }
}
