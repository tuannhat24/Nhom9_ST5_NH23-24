<!DOCTYPE html>
<html lang="en">

<head>
    @include("head")
</head>

<body>
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- Quên mật khẩu -->
            <form method="post" action="{{ route('forgot_password.send') }}" class="auth-form">
                @csrf
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Quên mật khẩu</h3>
                        <a href="{{ route('users.signin') }}" class="auth-form__switch-btn">Đăng nhập</a>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="email" name="email" class="auth-form__input" placeholder="Email">
                        </div>
                    </div>
                    <div class="auth-form__controls" style="margin-bottom: 24px;">
                    <a href="{{ route('users.signin') }}" class="btn btn--normal auth-form__controls-back ">TRỞ LẠI</a>
                        <button type="submit" class="btn btn--primary">GỬI YÊU CẦU</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
