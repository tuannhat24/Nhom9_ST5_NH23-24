        <!DOCTYPE html>
        <html lang="en">

        <head>
            @include("head")
        </head>
        <div class="modal">
            <div class="modal__overlay"></div>
            <div class="modal__body">
                <!-- Đăng kí -->
                <form method="post" action="{{ route('signup.send') }}" class="auth-form">
                    @csrf
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký</h3>
                            <a href="/" class="auth-form__switch-btn">Đăng nhập</a>
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
