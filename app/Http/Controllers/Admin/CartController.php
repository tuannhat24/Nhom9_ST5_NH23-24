<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function Index()
    {
        $carts = Cart::all();
        return view('cart', [
            'title' => 'Trang giỏ hàng',
            'carts' => $carts,
        ]);
    }

    // Thêm sản phẩm vào giỏ hàng
    public function Store(Request $request)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // Redirect back with validation errors if validation fails
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $existingCart = Cart::where('product_id', $request->product_id)
            ->where('customer_id', auth()->id())
            ->first();

        if ($existingCart) {
            // Nếu sản phẩm đã tồn tại, cập nhật số lượng
            $existingCart->quantity += $request->quantity;
            $existingCart->save();
        } else {
            // Nếu sản phẩm chưa tồn tại, tạo một sản phẩm mới trong giỏ hàng
            $cart = new Cart();
            $cart->product_id = $request->product_id;
            $cart->quantity = $request->quantity;

            // Thêm customer_id nếu có
            if (auth()->check()) {
                $cart->customer_id = auth()->user()->id;
            }

            $cart->save();
        }
        // Sau khi thêm sản phẩm vào giỏ hàng thành công, chuyển hướng người dùng đến trang giỏ hàng
        return redirect()->route('user.cart')->with('success', 'Product added to cart successfully');
    }
}
