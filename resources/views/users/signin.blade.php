<!DOCTYPE html>
<html lang="en">

<head>
    @include("head")
</head>

<body>
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- Đăng nhập -->
            <form method="post" action="{{ route('users.signin') }}" class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <a href="/signup" class="auth-form__switch-btn">Đăng ký</a>
                    </div>
                    <div class="auth-form__form">
                        @csrf
                        @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <ul>
                                <li>{{ Session::get('error') }}</li>
                            </ul>
                            <button class="close" onclick="closeAlert()">&times;</button>
                        </div>
                        @endif

                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                            <button class="close" onclick="closeAlert()">&times;</button>
                        </div>
                        @endif
                        <div class="auth-form__group">
                            <input type="email" name="email" class="auth-form__input" placeholder="Email">
                        </div>
                        <div class="auth-form__group">
                            <input type="password" name="password" class="auth-form__input" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="{{ route('users.forgot_password') }}" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>

                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <button type="submit" class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với FaceBook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title auth-form__socials-title--google">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
