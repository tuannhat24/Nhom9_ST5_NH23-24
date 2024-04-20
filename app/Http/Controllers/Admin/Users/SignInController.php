<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index()
    {
        // Kiểm tra nếu người dùng đã đăng nhập và có vai trò là 1 hoặc 2
        if (Auth::check() && in_array(Auth::user()->role, [1, 2])) {
            // Lấy URL trước đó nếu có
            $defaultUrl = "http://127.0.0.1:8000/";
            $currentUrl = url()->current();
            // Nếu URL trước đó không tồn tại hoặc trống, chuyển hướng đến trang tương ứng với vai trò của người dùng
            if ($currentUrl === route('users.signin') || $currentUrl === route('signup')) {
                if (Auth::user()->role === 2) {
                    return redirect()->route('admin.home');
                } elseif (Auth::user()->role === 1) {
                    return redirect()->route('user.home');
                } else {
                    return redirect()->route('users.signin');
                }
            }
            return redirect()->to($defaultUrl);
        }

        // Nếu không, hiển thị trang đăng nhập
        return view('users.signin', ['title' => 'Đăng nhập hệ thống']);
    }

    public function store(Request $request)
    {

        // Xử lí validate
        $this->validate($request, [
            'email' => 'required|email:filter',
            'password' => 'required'
        ]);


        // Xác thực tài khoản , mật khẩu và role
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ], $request->input('remember'))) {
            $role = Auth::user()->role;

            if ($role === 2) {
                // Lưu URL trước đó nếu có role 
                return redirect()->route('admin.home');
            } elseif ($role === 1) {
                return redirect()->route('user.home');
            } else {
                return redirect()->route('users.signin');
            }
        }

        Session::flash('error', 'Email or Password is incorrect');
        return redirect()->back();
    }
}
