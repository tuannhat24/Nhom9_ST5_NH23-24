@extends('users/admin.main')
@section('content')

<!-- Navbar -->
@include('users/admin.navbar')

<!-- Sidebar -->
@include('users/admin.sidebar')

<!--  -->
<div class="admin-container">
    <div class="container">
        <h1>{{ $title }}</h1>
        <form action="#">
            <div class="form-group">
                <label for="category-name">Category Name:</label>
                <input type="text" id="category-name" name="category-name">
            </div>
            <div class="form-group">
                <label for="category-price">Category Price:</label>
                <input type="num" id="category-price" name="category-price">
            </div>
            <button type="submit" class="btn">Add Category</button>
        </form>
    </div>
</div>

@endsection