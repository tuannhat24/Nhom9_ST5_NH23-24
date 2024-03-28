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
                        <h3 class="manager__heading">Trang giỏ hàng</h3>
                        <ul class="manager-list">
                            <li class="manager-item manager-item--active">
                                <a href="#" class="manager-item__link">ADMIN</a>
                            </li>
                            <li class="manager-item">
                                <a href="#" class="manager-item__link">USER</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="grid__column-10">
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


</body>

@endsection