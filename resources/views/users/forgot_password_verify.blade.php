<!-- Trang nhập OTP (forgot_password_verify.blade.php) -->
<!DOCTYPE html>
<html lang="en">

<head>
    @include("head")
</head>

<body>
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <form method="post" action="{{ route('users.forgot_password_verify') }}" class="auth-form">
                @csrf
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Xác thực OTP</h3>
                        <a href="{{ route('users.signin') }}" class="auth-form__switch-btn">ĐĂNG NHẬP</a>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger" style="max-height: 50px; display: flex; align-items: center;">
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                        <button class="close" onclick="closeAlert()">&times;</button>
                    </div>
                    @endif
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" id="otp" name="otp" placeholder="Nhập OTP" required>
                        </div>
                    </div>
                    <div class="auth-form__controls" style="margin-bottom: 24px;">
                        <a href="{{ route('users.forgot_password') }}" class="btn btn--normal auth-form__controls-back">TRỞ LẠI</a>
                        <button type="submit" class="btn btn--primary">XÁC THỰC OTP</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
