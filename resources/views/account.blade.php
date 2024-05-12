@extends('main')
@section('content')
<!-- sidebar -->

<!-- App container -->
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column-2">
                <nav class="manager">
                    <h3 class="manager__heading">{{ $title }}</h3>
                    <ul class="manager-list">
                        <li class="manager-item">
                            <a href="#" class="manager-item__link">Tài Khoản Của Tôi</a>
                        </li>
                        <li class="manager-item">
                            <a href="{{ route('user.purchase') }}" class="manager-item__link">Đơn Mua</a>
                        </li>
                        <li class="manager-item">
                            <a href="{{ route('user.voucher') }}" class="manager-item__link">Voucher</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="grid__column-10">
                <!-- content -->
                <h1>Thông Tin Tài Khoản</h1>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Họ và Tên:</label>
                        <input type="text" id="name" name="name" value="{{ $currentUser->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" value="{{ $currentUser->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số Điện Thoại:</label>
                        <input type="text" id="phone" name="phone" value="{{ $currentUser->customer->phone }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa Chỉ:</label>
                        <input type="text" id="address" name="address" value="{{ $currentUser->customer->address }}" required>
                    </div>
                    <div class="form-group">
                        <label for="image">Ảnh Đại Diện:</label>
                        <input type="file" id="image" name="image">
                    </div>
                    <button type="submit">Cập Nhật Thông Tin</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
