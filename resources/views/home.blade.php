@extends('main')
@section('content')

<div class="app">
    <!-- sidebar -->
    <!-- App container -->
    <div class="app__container">
        <div class="grid">
            <div class="grid__row app__content">
                <div class="grid__column-2">
                    <nav class="manager">
                        <h3 class="manager__heading">{{ $title }}</h3>
                        <!-- <ul class="manager-list">
                            <li class="manager-item">
                                <a href="/signin" class="manager-item__link">ĐÃ ĐĂNG NHẬP</a>
                            </li>
                            <li class="manager-item manager-item--active">
                                <a href="/signout" class="manager-item__link">USER</a>
                            </li>
                        </ul> -->
                    </nav>
                </div>

                <div class="grid__column-10">
                    <div class="home-filter">
                        <span class="home-filter__label">Sắp xếp theo</span>
                        <button class="home-filter__btn btn">Phổ biến</button>
                        <button class="home-filter__btn btn btn--primary">Mới nhất</button>
                        <button class="home-filter__btn btn">Bán chạy</button>

                        <!-- Price classification -->
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

                            @foreach($data as $row)
                            <!-- Product item -->
                            <div class="grid__column-2-4">
                            <a class="home-product-item" href="{{ route('user.detail', ['id' => $row->id]) }}">
                                    @php
                                    $imageUrl = asset('assets/img/' . $row->image);
                                    @endphp
                                    <div class="home-product-item__img" style="background-image: url('{{ $imageUrl }}');"></div>
                                    <h4 class="home-product-item__name">{{ $row->name }}</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">{{ $row->price }}</span>
                                        <span class="home-product-item__price-current">{{ $row->price_sale }}</span>
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
                            @endforeach



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
</div>
@endsection