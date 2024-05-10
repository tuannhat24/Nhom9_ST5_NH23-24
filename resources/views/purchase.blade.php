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
                            <a href="{{ route('user.account') }}" class="manager-item__link">Tài Khoản Của Tôi</a>
                        </li>
                        <li class="manager-item">
                            <a href="#" class="manager-item__link">Đơn Mua</a>
                        </li>
                        <li class="manager-item">
                            <a href="{{ route('user.voucher') }}" class="manager-item__link">Voucher</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="grid__column-10">
                <!-- content -->
                <section class="shopping-cart">
                    <h2>{{$title}}</h2>
                    <div class="cart-actions">
                        <table class="cart-table">
                            <thead>
                                <tr>
                                    <th>Hình Ảnh</th>
                                    <th>Tên</th>
                                    <th>Mã Sản Phẩm</th>
                                    <th style="padding-left: 10px; padding-right: 10px;">Size</th>
                                    <th style="padding-left: 10px; padding-right: 10px;">Color</th>
                                    <th>Đơn Giá (VND)</th>
                                    <th>Số Lượng</th>
                                    <th>Số Tiền (VND)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $totalQuantity = 0;
                                $totalPrice = 0;
                                @endphp
                                @foreach($carts as $cart)
                                @php
                                $totalQuantity += $cart->quantity;
                                $newPrice = $cart->product->price - ($cart->product->price * $cart->product->percent_discount / 100);
                                $totalPrice += $cart->quantity * $newPrice;
                                @endphp
                                <tr class="cart-item" data-product-id="{{ $cart->product->id }}">
                                    <td><a href="{{ route('user.detail', ['id' => $cart->product->id]) }}"><img src="{{ asset('assets/img/' . $cart->product->image) }}" alt="Product Image" style="width: 100px;"></a></td>
                                    <td><a href="{{ route('user.detail', ['id' => $cart->product->id]) }}">{{ $cart->product->name }}</a></td>
                                    <td>{{ $cart->product->id }}</td>
                                    <td style="padding-left: 10px; padding-right: 10px;">{{ $cart->size }}</td>
                                    <td style="padding-left: 10px; padding-right: 10px;">{{ $cart->color }}</td>
                                    <td class="price">{{ number_format($newPrice) }}</td>
                                    <td>
                                        <span class="quantity">{{ $cart->quantity }}</span>
                                    </td>
                                    <td class="total">{{ number_format($cart->quantity * $newPrice) }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                    </td>
                                    <td colspan="2">
                                    </td>
                                    <td colspan="2">
                                        <a href="#" class="button">Đánh Giá</a>
                                    </td>
                                    <td colspan="5">
                                        <button type="submit" class="btn btn--normal" style="border: 2px solid #ccc;">Mua Lại</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </section>
                <br>
            </div>
        </div>
    </div>
</div>

@endsection
