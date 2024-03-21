<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    <div class="app">
        @include("header")

        <div class="app__container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">Danh mục</h3>
                            <ul class="category-list">
                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link">Áo hoodie</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">Áo unisex</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">Quần jean</a>
                                </li>
                                <li class="category-item">
                                    <a href="#" class="category-item__link">Quần Baggy</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter__label">Sắp xếp theo</span>
                            <button class="home-filter__btn btn">Phổ biến</button>
                            <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                            <button class="home-filter__btn btn">Bán chạy</button>

                            <div class="select-input">
                                <span class="select-input__label">Giá</span>
                                <i class="select-input__icon fa-solid fa-angle-down"></i>

                                <!-- List options -->
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Thấp đến cao</a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="" class="select-input__link">Giá: Cao đến thấp</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="home-filter__page">
                                <span class="home-filter__page-num">
                                    <span class="home-filter__page-current">1</span>/14
                                </span>

                                <div class="home-filter__page-control">
                                    <a href="" class="home-filter__page-btn home-filter__page-btn--disabled">
                                        <i class="home-filter__page-icon fa-solid fa-angle-left"></i>
                                    </a>
                                    <a href="" class="home-filter__page-btn">
                                        <i class="home-filter__page-icon fa-solid fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="home-product">
                            <div class="grid__row">
                                <!-- Product item -->
                                <div class="grid__column-2-4">

                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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
                                    <a class="home-product-item" href="#">
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

                        <ul class="pagination home-product__pagination">
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="pagination-item pagination-item--active">
                                <a href="" class="pagination-item__link">1</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">2</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">3</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">4</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">...</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">14</a>
                            </li>
                            <li class="pagination-item">
                                <a href="" class="pagination-item__link">
                                    <i class="pagination-item__icon fa-solid fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        @include("footer")

    </div>


    <!-- modal layout -->
    <!-- SignIn and SignUp -->

    <!-- <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">

            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email">
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Mật khẩu">
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Nhập lại mật khẩu">
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
                        <button class="btn btn--normal auth-form__controls-back">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title auth-form__socials-title-google">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div>



            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn">Đăng ký</span>
                    </div>
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email">
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Mật khẩu">
                        </div>
                    </div>
                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>

                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <button class="btn btn--normal auth-form__controls-back ">TRỞ LẠI</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>

                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với FaceBook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div> -->


</body>

</html>