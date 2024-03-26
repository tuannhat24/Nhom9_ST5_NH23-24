@extends('main')
@section('content')

<body>
    <!-- sidebar -->
    <div class="app__container">
        <div class="grid sidebar hide">
            <!-- Model -->
            <div class="modal" id="sidebarModal">
                <div class="modal__overlay"></div>
                <!-- Sidebar -->
                <div class="sidebar__menu">
                    <i id="menu__bar-in" class="fa-solid fa-bars menu__bar-icon"></i>
                    <div class="sidebar__menu-img">
                        <a href="#" class="header__logo-link">
                            <i class="fa-brands fa-shopify fa-2xl" style="color: #74C0FC; font-size: 3em;"></i>
                            <svg class="header__logo-img" viewBox="0 0 200 50">
                                <text x="12" y="40" font-family="Arial, sans-serif" font-size="36" fill="#74C0FC">GenZ Store</text>
                            </svg>
                        </a>
                    </div>
                    <ul>
                        <li class="sidebar__menu-item">
                            <i class="fa-regular fa-rectangle-list" style="color: #74C0FC;"></i>
                            Quản lý danh mục
                            <i class=" sidebar__icon-up fa-solid fa-angle-up"></i>
                            <i class="sidebar__icon-down fa-solid fa-angle-down"></i>
                            <ul class="sub__menu">
                                <li>Danh mục 1</li>
                                <li>Danh mục 2</li>
                            </ul>
                        </li>
                        <li class="sidebar__menu-item">
                            <i class="fa-solid fa-users" style="color: #74C0FC;"></i>
                            Quản lý người dùng
                            <i class=" sidebar__icon-up fa-solid fa-angle-up"></i>
                            <i class="sidebar__icon-down fa-solid fa-angle-down"></i>
                            <ul class="sub__menu">
                                <li>Người dùng 1</li>
                                <li>Người dùng 2</li>
                            </ul>
                        </li>
                        <li class="sidebar__menu-item">
                            <i class="fa-solid fa-box fa-lg" style="color: #74C0FC;"></i>
                            Quản lý sản phẩm
                            <i class=" sidebar__icon-up fa-solid fa-angle-up"></i>
                            <i class="sidebar__icon-down fa-solid fa-angle-down"></i>
                            <ul class="sub__menu">
                                <li>Sản phẩm 1</li>
                                <li>Sản phẩm 2</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
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