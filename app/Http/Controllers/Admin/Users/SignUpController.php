<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function Index()
    {
        return view('users.signup', ['title' => 'Đăng ký hệ thống']);
    }

    public function Store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $validatedData = $request->validate([
            'email' => 'required|email:filter|unique:users,email',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ]);

        // Tạo người dùng mới
        $user = new User();
        $user->role = 1;
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        // Đăng nhập người dùng mới tạo
        Auth::login($user);

        if ($user->role === 1) {
            return redirect()->route('user');
        } else {
            return redirect()->route('users.signin');
        }
    }
}
