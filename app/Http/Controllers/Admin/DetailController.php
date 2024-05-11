<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id)
    {
        $perPage = 16; // Số sản phẩm hiển thị trên mỗi trang
        $product = Product::find($id);

        // Truy vấn thông tin của người dùng hiện tại
        $currentUser = auth()->user();

        if (!$product) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }

        // Truy vấn các sản phẩm liên quan
        $relatedProducts = Product::where('cate_id', $product->cate_id)
            ->where('id', '!=', $product->id) // Loại bỏ sản phẩm đang xem
            ->paginate($perPage); // Sử dụng phân trang

        // Lấy giỏ hàng của người dùng hiện tại
        $carts = Cart::where('customer_id', $currentUser->customer_id)->get();

        // Check if the product is already favorited by the user
        $favorite = Favorite::where('customer_id', $currentUser->customer_id)
            ->where('product_id', $id)
            ->first();

        $favoriteProducts = Favorite::where('customer_id', $currentUser->customer_id)->get();



        return view('detail', [
            'product' => $product,
            'carts' => $carts,
            'relatedProducts' => $relatedProducts,
            'currentUser' => $currentUser,
            'title' => 'Trang chi tiết sản phẩm',
            'favorite' => $favorite,
            'favoriteProducts' => $favoriteProducts,
        ]);
    }

    public function toggleFavorite($id)
    {
        $user = auth()->user();

        $favorite = Favorite::where('customer_id', $user->customer_id)
            ->where('product_id', $id)
            ->first();

        if ($favorite) {
            // Nếu đã yêu thích, bỏ yêu thích và xóa từ cơ sở dữ liệu
            $favorite->delete();
        } else {
            // Nếu chưa yêu thích, thêm vào yêu thích và lưu vào cơ sở dữ liệu
            Favorite::create([
                'customer_id' => $user->customer_id,
                'product_id' => $id,
                'is_favorite' => true,
            ]);
        }
        return redirect()->back();
    }
}
