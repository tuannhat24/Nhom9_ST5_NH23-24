@extends('main')
@section('content')
<!-- sidebar -->
<!-- App container -->
<div class="app__container">
    <div class="grid">
        <div class="grid__row app__content">
            <div class="grid__column">
                <!-- content -->
                <section class="shopping-cart">
                    <h2>Giỏ Hàng</h2>
                    <div class="cart-actions">
                        @if($carts->isEmpty())
                        <img src="{{ asset('assets/img/no-cart.webp') }}" alt="No-cart">
                        <a href="{{route('user.product')}}" class="button buy-now-btn">Mua Ngay</a>
                        @else
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
                                    <th>Thao Tác</th>
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
                                        <form action="{{ route('user.cart.update', ['cartId' => $cart->id]) }}" method="POST">
                                            @csrf
                                            <button class="quantity-btn" type="submit" name="change" value="-1"><i class="fas fa-minus"></i></button>
                                            <span class="quantity">{{ $cart->quantity }}</span>
                                            <button class="quantity-btn" type="submit" name="change" value="1"><i class="fas fa-plus"></i></button>
                                        </form>
                                    </td>
                                    <td class="total">{{ number_format($cart->quantity * $newPrice) }}</td>
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
                                    <td colspan="2" class="text-right">Tổng Số Lượng Sản Phẩm:</td>
                                    <td colspan="2" id="total-quantity">{{ $totalQuantity }}</td>
                                    <td colspan="2">Tổng Số Tiền:</td>
                                    <td colspan="2"><strong id="total-price">{{ number_format($totalPrice) }}</strong></td>
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
                </section>
                <!-- Relate products -->
                <section class="related-products">
                    <div class="container">
                        <div class="more">
                            <h2 class="related-products__title"> Có thể bạn sẽ thích </h2>
                            <a href="{{ route('user.all-products') }}" class="btn-more">Xem Thêm<i style="padding-left: 6px;" class="fa-solid fa-arrow-right"></i></a>
                        </div>
                        <div class="grid__row">
                            @foreach($relatedProducts as $row)
                            <!-- Product item -->
                            <div class="grid__column-2-4">
                                <a class="home-product-item" href="{{ route('user.detail', ['id' => $row->id]) }}">
                                    @php
                                    $imageUrl = asset('assets/img/' . $row->image);
                                    $newPrice = $row->price - ($row->price * $row->percent_discount / 100);
                                    @endphp
                                    <div class="home-product-item__img" style="background-image: url('{{ $imageUrl }}');"></div>
                                    <h4 class="home-product-item__name">{{ $row->name }}</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">{{ number_format($row->price) }}</span>
                                        <span class="home-product-item__price-current">{{ number_format($newPrice) }}</span>
                                    </div>
                                    <div class="home-product-item__action">
                                        <span class="home-product-item__like home-product-item__like--liked">
                                            <i class="home-product-item__like-icon-empty fa-regular fa-heart"></i>
                                            <i class="home-product-item__like-icon-fill fa-solid fa-heart"></i>
                                        </span>
                                        <div class="home-product-item__rating">
                                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                            <i class="home-product-item__star--gold fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span class="home-product-item__sold">{{ $row->quantity_sold }} Đã bán</span>
                                    </div>
                                    <div class="home-product-item__origin">
                                        <span class="home-product-item__brand">GenZ</span>
                                        <span class="home-product-item__origin-name">Việt Nam</span>
                                    </div>
                                    <div class="home-product-item__favourite">
                                        <i class="fa-solid fa-check"></i>
                                        <span>Yêu thích</span>
                                    </div>
                                    @if( $row->percent_discount > 0 )
                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">{{ number_format($row->percent_discount) }}%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
                                    @endif
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <br>
            </div>
        </div>
    </div>
</div>

@endsection
