@extends('main')
@section('content')
<!-- App container -->
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column">
                <div class="container">
                    <!-- Kiểm tra và hiển thị thông báo -->
                    @if(session('success_message'))
                    <div class="alert alert-success">
                        {{ session('success_message') }}
                    </div>
                    @endif
                    <!-- content -->
                    <section class="shopping-cart">
                        <div class="container">
                            <div class="grid__row">
                                <div class="grid__column">
                                    <h2>Thanh Toán</h2>
                                    <div class="cart-actions">
                                        @if($carts->isEmpty())
                                        <img src="{{ asset('assets/img/no-cart.webp') }}" alt="No-cart">
                                        <a href="{{route('user.product')}}" class="button buy-now-btn">Thanh Toán</a>
                                        @else
                                    </div>
                                    <table class="cart-table">
                                        <tbody>
                                            <tr>
                                                <th>Hình Ảnh</th>
                                                <th>Tên</th>
                                                <th>Mã Sản Phẩm</th>
                                                <th>Đơn Giá (VND)</th>
                                                <th>Số Lượng</th>
                                                <th>Số Tiền (VND)</th>
                                                <th>Thao Tác</th>
                                            </tr>
                                            @php
                                            $totalQuantity = 0;
                                            $totalPrice = 0;
                                            @endphp
                                            @foreach($carts as $cart)
                                            @php
                                            $totalQuantity += $cart->quantity;
                                            $totalPrice += $cart->quantity * $cart->product->price;
                                            @endphp
                                            <tr class="cart-item" data-product-id="{{ $cart->product->id }}">
                                                <td><a href="{{ route('user.detail', ['id' => $cart->product->id]) }}"><img src="{{ asset('assets/img/' . $cart->product->image) }}" alt="Product Image" style="width: 100px;"></a></td>
                                                <td><a href="{{ route('user.detail', ['id' => $cart->product->id]) }}">{{ $cart->product->name }}</a></td>
                                                <td>{{ $cart->product->id }}</td>
                                                <td class="price">{{ number_format($cart->product->price) }}</td>
                                                <td>
                                                    <form action="{{ route('user.cart.update', ['cartId' => $cart->id]) }}" method="POST">
                                                        @csrf
                                                        <button class="quantity-btn" type="submit" name="change" value="-1"><i class="fas fa-minus"></i></button>
                                                        <span class="quantity">{{ $cart->quantity }}</span>
                                                        <button class="quantity-btn" type="submit" name="change" value="1"><i class="fas fa-plus"></i></button>
                                                    </form>
                                                </td>
                                                <td class="total">{{ number_format($cart->quantity * $cart->product->price) }}</td>
                                                <td>
                                                    <form action="{{ route('user.cart.remove', ['cartId' => $cart->id]) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="remove-item">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                            <tr>

                                                <td>
                                                    <form action="{{route('user.checkout.vnpay')}}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="amount" value="{{ $totalPrice }}">
                                                        <button type="submit" class="btn btn--success">Thanh toán vnpay</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" class="text-right">Tổng Số Lượng Sản Phẩm:</td>
                                                <td colspan="1" id="total-quantity">{{ $totalQuantity }}</td>
                                                <td colspan="2">Tổng Số Tiền:</td>
                                                <td colspan="1"><strong id="total-price">{{ number_format($totalPrice) }}</strong></td>
                                                <td>
                                                    <form method="POST" action="{{ route('user.checkout') }}">
                                                        @csrf
                                                        <button type="submit" class="button checkout-btn">Thanh Toán</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection