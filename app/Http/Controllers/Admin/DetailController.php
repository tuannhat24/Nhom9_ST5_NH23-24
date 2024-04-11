<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        $perPage = 10; // Số sản phẩm hiển thị trên mỗi trang
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

        // Truy vấn các sản phẩm liên quan
        $relatedProducts = Product::where('cate_id', $product->cate_id)
            ->where('id', '!=', $product->id) // Loại bỏ sản phẩm đang xem
            ->paginate($perPage); // Sử dụng phân trang

        // Truy vấn giỏ hàng
        $carts = Cart::all();

        return view('detail', [
            'product' => $product,
            'carts' => $carts,
            'relatedProducts' => $relatedProducts,
            'title' => 'Trang chi tiết sản phẩm',
        ]);
    }
}
