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
                </nav>
            </div>

            <div class="grid__column-10">
                <!-- content -->
                <section class="shopping-cart">
                    <h2>Giỏ Hàng</h2>
                    <div class="cart-actions">
                        @if($carts->isEmpty())
                        <div class="empty-cart">Giỏ hàng của bạn đang trống.</div>
                        @else
                        <form action="{{ route('user.cart.clear') }}" method="POST">
                            @csrf
                            <button type="submit" class="button empty-cart-btn"><i style="padding-right: 4px;" class="fas fa-trash-alt"></i>Xóa Tất Cả</button>
                        </form>
                        @endif
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
                                <th></th>
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
                                <td><img src="{{ asset('assets/img/' . $cart->product->image) }}" alt="Product Image" style="width: 100px;"></td>
                                <td>{{ $cart->product->name }}</td>
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
                                <td></td>
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
                                <td colspan="2" id="total-quantity" style="padding-left: 156px;">{{ $totalQuantity }}</td>
                                <td colspan="1">Tổng Số Tiền:</td>
                                <td colspan="2"><strong id="total-price">{{ number_format($totalPrice) }}</strong></td>
                                <td>
                                    <form method="POST" action="{{ route('user.cart.checkout') }}">
                                        @csrf
                                        <button type="submit" class="button checkout-btn">Mua Hàng</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <!-- Relate products -->
                <section class="related-products">
                    <div class="container">
                        <h2 class="related-products__title">Related products</h2>
                        <div class="grid__row">
                            @foreach($relatedProducts as $row)
                            <!-- Product item -->
                            <div class="grid__column-2-4">
                                <a class="home-product-item" href="{{ route('user.detail', ['id' => $row->id]) }}">
                                    @php
                                    $imageUrl = asset('assets/img/' . $row->image);
                                    @endphp
                                    <div class="home-product-item__img" style="background-image: url('{{ $imageUrl }}');"></div>
                                    <h4 class="home-product-item__name">{{ $row->name }}</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">{{ number_format($row->price) }}</span>
                                        <span class="home-product-item__price-current">{{ number_format($row->price_sale) }}</span>
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
                                    <div class="home-product-item__sale-off">
                                        <span class="home-product-item__sale-off-percent">25%</span>
                                        <span class="home-product-item__sale-off-label">GIẢM</span>
                                    </div>
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
</body>

@endsection