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
                        <ul class="manager-list">
                            @foreach ($categories as $category)
                            <li class="manager-item">
                                <a href="/signin" class="manager-item__link">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
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
                                    <a href="{{ route('product.search', ['sort' => 'price_asc', 'query' => request()->input('query')]) }}" class="select-input__link">Giá: Thấp đến cao</a>
                                </li>
                                <li class="select-input__item">
                                    <a href="{{ route('product.search', ['sort' => 'price_desc', 'query' => request()->input('query')]) }}" class="select-input__link">Giá: Cao đến thấp</a>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <div class="home-product">

                        <div class="grid__row">

                            @foreach($products as $product)
                            <!-- Product item -->
                            <div class="grid__column-2-4">
                                <a class="home-product-item" href="{{ route('user.detail', ['id' => $product->id]) }}">
                                    @php
                                    $imageUrl = asset('assets/img/' . $product->image);
                                    @endphp
                                    <div class="home-product-item__img" style="background-image: url('{{ $imageUrl }}');"></div>
                                    <h4 class="home-product-item__name">{{ $product->name }}</h4>
                                    <div class="home-product-item__price">
                                        <span class="home-product-item__price-old">{{ number_format($product->price) }}</span>
                                        <span class="home-product-item__price-current">{{ number_format($product->price_sale) }}</span>
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
                                        <span class="home-product-item__sold">{{ $product->quantity_sold }} Đã bán</span>
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
                    <!-- Hiển thị số trang theo số thứ tự -->
                    <div class="home-pagination">
                        @for ($i = 1; $i <= $totalPages; $i++)<a href="{{ route('product.search', ['query' => request()->input('query'), 'page' => $i, 'sort' => request()->input('sort')]) }}" class="{{ $i == $currentPage ? 'active' : '' }}">{{ $i }}</a>
                            @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection