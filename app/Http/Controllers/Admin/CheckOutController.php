<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CheckOutController extends Controller
{
    public function index()
    {
        $title = "Thanh Toán";

        // Truy vấn giỏ hàng
        $carts = Cart::all();

         // Truy vấn thông tin của người dùng hiện tại
         $currentUser = auth()->user();

        return view('checkout', compact(
            'title',
            'carts',
            'currentUser',
        ));
    }
}
