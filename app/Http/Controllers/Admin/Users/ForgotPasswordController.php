<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        // Hiển thị form quên mật khẩu
        return view('users.forgot_password', ['title' => 'Quên mật khẩu']);
    }

    public function sendResetLinkEmail(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'email' => 'required|email'
        ]);

        // Gửi liên kết đặt lại mật khẩu
        $response = Password::sendResetLink($request->only('email'));

        // Kiểm tra và trả về thông báo tương ứng
        if ($response == Password::RESET_LINK_SENT) {
            return redirect()->back()->with('status', trans($response));
        } else {
            return redirect()->back()->withErrors(['email' => trans($response)]);
        }
    }
}
