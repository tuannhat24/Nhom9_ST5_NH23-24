<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        $title = "Tài Khoản";

        // Truy vấn người dùng
        $users = User::all();

        // Truy vấn thông tin của người dùng hiện tại
        $currentUser = auth()->user();

        // Lấy giỏ hàng của người dùng hiện tại
        $carts = Cart::where('customer_id', $currentUser->customer_id)->get();


        return view('account', compact(
            'title',
            'users',
            'carts',
            'currentUser',
        ));
    }
}
