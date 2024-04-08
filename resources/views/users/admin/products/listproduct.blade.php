@extends('users/admin.main')

@section('content')
<div class="admin-container">
    <div class="container">
        <h2>Product List</h2>
        <table class="product-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
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
                        <a href="#" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn-delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>Product 2</td>
                    <td>Category B</td>
                    <td>Description of Product 2</td>
                    <td>$120</td>
                    <td>
                        <a href="#" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn-delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <!-- Add more product rows here -->
            </tbody>
        </table>
    </div>
</div>
@endsection
