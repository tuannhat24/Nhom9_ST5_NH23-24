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
                        <h2>Shopping Cart</h2>
                        <div class="cart-actions">
                            <a class="button empty-cart-btn" href="#"><i class="fas fa-trash-alt"></i> Empty Cart</a>
                        </div>
                        <table class="cart-table">
                            <tbody>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Quantity</th>
                                    <th>Price (in $)</th>
                                    <th>Total (in $)</th>
                                    <th>Actions</th>
                                </tr>
                                @php
                                $totalQuantity = 0;
                                $totalPrice = 0;
                                @endphp
                                @foreach($carts as $cart)
                                @php
                                $totalQuantity += $cart->qty;
                                $totalPrice += $cart->qty * $cart->product->price;
                                @endphp
                                <tr class="cart-item" data-product-id="{{ $cart->product->id }}">
                                    <td><img src="{{ asset('assets/img/' . $cart->product->image) }}" alt="Product Image" style="width: 100px;"></td>
                                    <td>{{ $cart->product->name }}</td>
                                    <td>{{ $cart->product->code }}</td>
                                    <td>
                                        <button class="quantity-btn" onclick="updateQuantity('{{ $cart->id }}', -1)"><i class="fas fa-minus"></i></button>
                                        <span class="quantity">{{ $cart->quantity }}</span>
                                        <button class="quantity-btn" onclick="updateQuantity('{{ $cart->id }}', 1)"><i class="fas fa-plus"></i></button>
                                    </td>
                                    <td class="price">{{ number_format($cart->product->price) }}</td>
                                    <td class="total">{{ number_format($cart->quantity * $cart->product->price) }}</td>
                                    <td>
                                        <a href="#" class="edit-item"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="remove-item"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="2" class="text-right">Total:</td>
                                    <td id="total-quantity">{{ $totalQuantity }}</td>
                                    <td colspan="2"><strong id="total-price">{{ number_format($totalPrice) }}</strong></td>
                                    <td>
                                        <div>
                                            <a class="button checkout-btn" href="#">Mua Hàng</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <br>
                </div>
            </div>
        </div>
    </div>
</body>

@endsection
