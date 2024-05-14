<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\OtpMail;
use Carbon\Carbon;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('users.forgot_password', ['title' => 'Quên mật khẩu']);
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email|exists:users,email']);

        $otp = Str::random(6);
        $email = $request->email;

        DB::table('password_resets')->updateOrInsert(
            ['email' => $email],
            [
                'email' => $email,
                'token' => $otp,
                'created_at' => Carbon::now()
            ]
        );

        Mail::to($email)->send((new OtpMail($otp))->from('sender@example.com', 'Sender Name'));

        return redirect()->back()->with('status', 'OTP đã được gửi đến email của bạn.');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required'
        ]);

        $record = DB::table('password_resets')
                    ->where('email', $request->email)
                    ->where('token', $request->otp)
                    ->first();

        if (!$record) {
            return redirect()->back()->withErrors(['otp' => 'OTP không hợp lệ.']);
        }

        return redirect()->route('users.reset_password', ['email' => $request->email, 'otp' => $request->otp]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'otp' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        $record = DB::table('password_resets')
                    ->where('email', $request->email)
                    ->where('token', $request->otp)
                    ->first();

        if (!$record) {
            return redirect()->back()->withErrors(['otp' => 'OTP không hợp lệ.']);
        }

        $user = User::where('email', $request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_resets')->where('email', $request->email)->delete();

        return redirect()->route('users.signin')->with('status', 'Đặt lại mật khẩu thành công.');
    }
}
