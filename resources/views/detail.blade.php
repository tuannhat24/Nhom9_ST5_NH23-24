@extends('main')
@section('content')

<body>
    <!-- sidebar -->
    @include('sidebar')
    <!-- App container -->
    <div class="app__container">
        <div class="grid">
            <div class="grid__row app__content">
                <div class="grid__column-2">
                    <nav class="manager">
                        <h3 class="manager__heading">{{ $title }}</h3>
                        <!-- <ul class="manager-list">
                            <li class="manager-item">
                                <a href="#" class="manager-item__link">ADMIN</a>
                            </li>
                            <li class="manager-item manager-item--active">
                                <a href="#" class="manager-item__link">USER</a>
                            </li>
                        </ul> -->
                    </nav>
                </div>

                <div class="grid__column-10">
                    <!-- content -->
                    <section class="product-section">
                        <div class="product-container">
                            <div class="product-row">
                                <div class="product-image">
                                    <img src="https://down-vn.img.susercontent.com/file/4eb6c3e9aad807a8d356f434d50c8116" alt="Product Image">
                                </div>
                                <div class="product-details">
                                    <div class="product-sku">SKU: BST-498</div>
                                    <h1 class="product-title">Shop item template</h1>
                                    <div class="product-prices">
                                        <span class="product-price-old">$45.00</span>
                                        <span class="product-price-new">$40.00</span>
                                    </div>
                                    <p class="product-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                                    <div class="product-actions">
                                        <input class="product-quantity" type="num" value="1">
                                        <button class="btn product-add-to-cart">Add to cart</button>
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section class="related-products">
                        <div class="container">
                            <h2 class="related-products__title">Related products</h2>
                            <div class="grid__row">
                                <!-- Product item -->
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                                <div class="grid__column-2-4">
                                    <a class="home-product-item" href="{{ route('user.detail') }}">
                                        <div class="home-product-item__img" style="background-image: url(https://cdn.shopify.com/s/files/1/0354/5169/9333/products/Ao-hoodie-2-Black-2-ZiZoou-Store.jpg?v=1640877890);"></div>
                                        <h4 class="home-product-item__name">Áo khoác Hoodie Nam Nữ form rộng - Basic Oversize Zip-Up Hoodie in Black</h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old">200.000đ</span>
                                            <span class="home-product-item__price-current">150.000đ</span>
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
                                            <span class="home-product-item__sold">2040 Đã bán</span>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Zizou</span>
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
                            </div>
                        </div>
                    </section>

                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>


</body>

@endsection