<!DOCTYPE html>
<html lang="en">

<head>
    @include("head")
</head>

<body>
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- Show error from controller -->
            <form method="post" action="{{ route('signup_create_password') }}" class="auth-form">
                @csrf
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đặt lại mật khẩu</h3>
                        <a href="{{ route('users.signin') }}" class="auth-form__switch-btn">Đăng nhập</a>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger" style="max-height: 100px; display: flex; align-items: center;">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button class="close" onclick="closeAlert()">&times;</button>
                    </div>
                    @endif
                    <input type="hidden" name="email" value="{{ request()->query('email') }}">
                    <input type="hidden" name="otp" value="{{ request()->query('otp') }}">
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="password" name="password" class="auth-form__input" placeholder="Mật khẩu mới" required>
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password_confirmation" class="auth-form__input" placeholder="Xác nhận mật khẩu" required>
                        </div>
                    </div>
                    <div class="auth-form__controls" style="margin-bottom: 24px;">
                        <a href="{{ route('signup_verify.verify') }}" class="btn btn--normal auth-form__controls-back">TRỞ LẠI</a>
                        <button type="submit" class="btn btn--primary">TẠO MẬT KHẨU</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
