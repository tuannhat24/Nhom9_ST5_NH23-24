<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    public function index()
    {
        $title = "Giỏ Hàng";
        $carts = Cart::all();
        // Truy vấn các sản phẩm khác ngoài giỏ hàng
        $relatedProducts = Product::whereNotIn('id', $carts->pluck('product_id'))->limit(10)->get();

        return view('cart', compact('title', 'carts', 'relatedProducts'));
    }

    public function detail($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

        // Truy vấn các sản phẩm liên quan
        $relatedProducts = Product::where('cate_id', $product->cate_id)
            ->where('id', '!=', $product->id)
            ->limit(10)
            ->get();

        return view('detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'title' => 'Trang chi tiết sản phẩm',
        ]);
    }

    public function store(Request $request)
    {
        // Lấy ID của người dùng đang đăng nhập
        $customerId = auth()->user()->id;
        //Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
        $existingCartItem = Cart::where('product_id', $request->input('product_id'))->first();

        // Nếu sản phẩm đã tồn tại trong giỏ hàng, cập nhật số lượng 
        if ($existingCartItem) {
            $existingCartItem->update([
                'quantity' => $existingCartItem->quantity + $request->input('quantity')
            ]);
        } else {
            // Nếu sản phẩm chưa tồn tại trong giỏ hàng, tạo mới một bản ghi
            Cart::create([
                'customer_id' => $customerId,
                'product_id' => $request->input('product_id'),
                'quantity' => $request->input('quantity')
            ]);
        }

        // Chuyển hướng trở lại trang giỏ hàng sau khi thêm sản phẩm thành công
        return redirect()->route('user.cart')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

    // Xóa toàn bộ sản phẩm trong giỏ hàng
    public function clearCart()
    {
        Cart::truncate();
        return redirect()->back();
    }

    public function updateCart(Request $request, $cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $change = $request->input('change');
        if ($change > 0) {
            $cart->quantity += $change;
        } else if ($change < 0 && $cart->quantity > 1) {
            $cart->quantity += $change;
        }
        $cart->save();
        return redirect()->back();
    }

    public function removeItem($cartId)
    {
        // Xóa một sản phẩm khỏi giỏ hàng
        $cart = Cart::findOrFail($cartId);
        $cart->delete();
        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }


    public function checkout()
    {
        // Thực hiện xử lý thanh toán ở đây
        return redirect()->route('checkout');
    }
}
