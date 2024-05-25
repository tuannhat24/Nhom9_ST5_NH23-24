<!DOCTYPE html>
<html lang="en">

<head>
    @include("head")
</head>

<body>
    <!-- header -->
    <header class="header" style="background-image: linear-gradient(0, rgb(0 31 63 / 0%), rgb(0 0 0 / 19%));">
        <div class="grid">
            <!-- Header with search -->
            <div class="header-with-search">
                <div class="header__logo-img" id="header__logo-out">
                    <a href="{{route('guest.home')}}" class="header__logo-link">
                        <i class="fa-brands fa-shopify fa-2xl" style="color: #74C0FC; font-size: 3em;"></i>
                        <svg class="header__logo-img" viewBox="0 0 200 50">
                            <text x="12" y="40" font-family="Arial, sans-serif" font-size="36" fill="#74C0FC">GenZ Store</text>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </header>
    <!-- content -->
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <!-- Đăng kí -->
            <form method="post" action="{{ route('signup.send') }}" class="auth-form">
                @csrf
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <a href="{{ route('users.signin') }}" class="auth-form__switch-btn">Đăng nhập</a>
                    </div>
                    <div class="auth-form__form">
                        <!-- Hiển thị thông báo lỗi -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button class="close" onclick="closeAlert()">
                                &times;
                            </button>
                        </div>
                        @endif
                        <div class="auth-form__group">
                            <input type="email" name="email" class="auth-form__input" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng kí, bạn đã đồng ý với Shopee về
                            <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>
                            &
                            <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>
                    <div class="auth-form__controls">
                        <a href="{{ route('users.signin') }}" class="btn btn--normal auth-form__controls-back ">TRỞ LẠI</a>
                        <button type="submit" class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="#" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="#" class="auth-form__socials--google btn btn--size-s btn btn--with-icon">
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