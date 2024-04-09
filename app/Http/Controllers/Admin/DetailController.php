<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function Index()
    {
        $product = Product::orderBy('id')->get();
        return view('detail', [
            'title' => 'Trang chi tiết sản phẩm',
            'product' => $product,
        ]);
    }

    public function Detail($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

        // Truy vấn các sản phẩm liên quan
        $relatedProducts = Product::where('cate_id', $product->cate_id)
            ->where('id', '!=', $product->id) // Loại bỏ sản phẩm đang xem
            ->limit(10) // Giới hạn số lượng sản phẩm liên quan
            ->get();

        return view('detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'title' => 'Trang chi tiết sản phẩm',
        ]);
    }
}
