@extends('users/admin.main')

@section('content')
<div class="admin-container">
    <div class="container">
        <h2>Category List</h2>
        <table class="category-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent Category</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>Category 2</td>
                    <td>Main Category</td>
                    <td>Description of Category 2</td>
                    <td></td>
                    <td>
                        <a href="{{ route('admin.category') }}"><i class="fa-solid fa-square-plus"></i></a>
                        <a href="#" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn-delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <!-- Add more category rows here -->
            </tbody>
        </table>
    </div>
</div>
@endsection
