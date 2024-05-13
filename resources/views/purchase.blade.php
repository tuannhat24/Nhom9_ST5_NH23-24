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
                            <a href="{{route('user.profile', ['id' => $currentUser->id])}}" class="manager-item__link">Tài khoản của tôi</a>
                        </li>
                        <li class="manager-item">
                            <a href="#" class="manager-item__link active">Đơn Mua</a>
                        </li>
                        <li class="manager-item">
                            <a href="{{ route('user.voucher') }}" class="manager-item__link">Voucher</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="grid__column-10">
                <!-- content -->
                <br>
            </div>
        </div>
    </div>
</div>

@endsection
