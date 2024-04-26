<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller
{
    public function index()
    {
        return view('users.signup', ['title' => 'Đăng ký hệ thống']);
    }

    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validatedData = $request->validate([
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ],
        [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất :min kí tự.',
            'password_confirmation.required' => 'Vui lòng nhập mật khẩu xác nhận.',
            'password_confirmation.same' => 'Mật khẩu xác nhận không trùng khớp với mật khẩu đã nhập.'
        ]);
        // Tạo người dùng mới
        $user = new User();
        $user->role = 1;
        $user->image = 'User.png';
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->save();

        if ($user->save()) {
            // Thành công
            return redirect()->route('users.signin')->with('success', 'Tài khoản đã được đăng ký thành công!');
        } else {
            // Thất bại
            return redirect()->back()->with('error', 'Đã xảy ra lỗi, vui lòng thử lại sau.');
        }
    }
}
