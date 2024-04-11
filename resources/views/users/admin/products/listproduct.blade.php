@extends('users/admin.main')

@section('content')
<form action="" method="POST">
    <div class="admin-container">
        <div class="container">
            <h2>Product List</h2>
            <table class="product-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Price sale</th>
                        <th>Quantily sold</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product 1</td>
                        <td>Category A</td>
                        <td>Description of Product 1</td>
                        <td>$100</td>
                        <td>
                            <a href="{{ route('admin.product') }}"><i class="fa-solid fa-square-plus"></i></a>
                            <a href="#" class="btn-delete"><i class="fas fa-trash-alt"></i></a>
                            <a href="#" class="btn-edit"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    
                    <!-- Add more product rows here -->
                </tbody>
            </table>
            
        </div>
    </div>
</form>
@endsection
