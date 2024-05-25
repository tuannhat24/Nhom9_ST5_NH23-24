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
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <form method="post" action="{{ route('forgot_password.send') }}" class="auth-form">
                @csrf
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Quên mật khẩu</h3>
                        <a href="{{ route('users.signin') }}" class="auth-form__switch-btn">Đăng nhập</a>
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
                            <input type="email" name="email" class="auth-form__input" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="auth-form__controls" style="margin-bottom: 24px;">
                        <a href="{{ route('users.signin') }}" class="btn btn--normal auth-form__controls-back">TRỞ LẠI</a>
                        <button type="submit" class="btn btn--primary">GỬI YÊU CẦU</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>