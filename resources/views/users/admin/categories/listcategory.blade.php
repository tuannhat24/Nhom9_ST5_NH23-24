@extends('users.admin.layout.admin')
<!--Container-->
@section('content')
<div class="admin-container">
    <div class="container">
        <h2>Category List</h2>
        <table class="category-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
             @foreach ($categories as $category) 
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->description}}</td>
                    <td>
                        <a href="{{ route('admin.category.create') }}"><i class="fa-solid fa-square-plus"></i></a>
                        <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn-edit"><i class="fas fa-edit"></i></a>
                        <a href="{{ route('admin.category.delete', ['id' => $category->id]) }}" class="btn-delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
                <!-- Add more category rows here -->
            </tbody>
        </table>   
        {{-- <div class="pagination" style="margin-top: 20px; text-align: right;">
            {{$categories->links()}}
        </div> --}}
    </div>
    
</div>
@endsection

