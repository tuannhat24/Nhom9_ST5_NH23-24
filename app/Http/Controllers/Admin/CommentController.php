<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use App\Models\User; // Import model User
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function poComment(Request $request, Product $product)
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!Auth::check()) {
            return back()->with('error', 'Bạn phải đăng nhập để bình luận.');
        }

        // Xác thực dữ liệu đầu vào
        $request->validate([
            'body' => 'required|max:255', // Đặt độ dài tối đa của bình luận là 255 ký tự
        ]);

        // Lấy thông tin người dùng đang đăng nhập
        $user = Auth::user();

        // Kiểm tra xem người dùng có hình ảnh không
        if ($user->image) {
            // Tạo đường dẫn đầy đủ đến hình ảnh của người dùng
            $imageUrl = asset('assets/img/' . $user->image);
        } else {
            // Nếu người dùng không có hình ảnh, sử dụng hình ảnh mặc định hoặc đường dẫn tới một hình ảnh khác
            $imageUrl = asset('assets/img/User.png');
        }

        // Tạo bình luận
        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = $user->id;
        $comment->image = $imageUrl; // Lưu đường dẫn hình ảnh của người dùng
        $comment->product_id = $product->id;
        $comment->save();

        return back()->with('success', 'Bình luận đã được thêm.');
    }
}
