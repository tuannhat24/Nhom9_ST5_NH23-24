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
                                <tr>
                                    <td><img src="https://cf.shopee.vn/file/sg-11134201-22100-m5u5z5rz5siv4a" alt="Product Image" style="width: 100px;"></td>
                                    <td>EXP Portable Hard Drive</td>
                                    <td>USB02</td>
                                    <td><button class="quantity-btn"><i class="fas fa-minus"></i></button>
                                        <span>1</span>
                                        <button class="quantity-btn"><i class="fas fa-plus"></i></button>
                                    </td>
                                    <td>800.00</td>
                                    <td>800.00</td>
                                    <td>
                                        <a href="#" class="edit-item"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="remove-item"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="https://cf.shopee.vn/file/sg-11134201-22100-m5u5z5rz5siv4a" alt="Product Image" style="width: 100px;"></td>
                                    <td>FinePix Pro2 3D Camera</td>
                                    <td>3DcAM01</td>
                                    <td><button class="quantity-btn"><i class="fas fa-minus"></i></button>
                                        <span>1</span>
                                        <button class="quantity-btn"><i class="fas fa-plus"></i></button>
                                    </td>
                                    <td>1500.00</td>
                                    <td>1,500.00</td>
                                    <td>
                                        <a href="#" class="edit-item"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="remove-item"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="https://cf.shopee.vn/file/sg-11134201-22100-m5u5z5rz5siv4a" alt="Product Image" style="width: 100px;"></td>
                                    <td>Luxury Ultra thin Wrist Watch</td>
                                    <td>wristWear03</td>
                                    <td><button class="quantity-btn"><i class="fas fa-minus"></i></button>
                                        <span>2</span>
                                        <button class="quantity-btn"><i class="fas fa-plus"></i></button>
                                    </td>
                                    <td>300.00</td>
                                    <td>600.00</td>
                                    <td>
                                        <a href="#" class="edit-item"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="remove-item"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-right">Total:</td>
                                    <td>4</td>
                                    <td colspan="2"><strong>2,900.00</strong></td>
                                    <td>
                                        <div>
                                            <a class="button checkout-btn" href="#">Mua Hàng</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
<<<<<<< HEAD
                    <br>
=======
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
>>>>>>> c37cb3a67051a10ffeb689d3d3b5674052eccc38
                </div>
            </div>
        </div>
    </div>


</body>

@endsection