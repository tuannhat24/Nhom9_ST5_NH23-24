@extends('users/admin.main')
@section('content')

<div class="admin-container">
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="#">
        <div class="form-group">
            <label for="product-name">Product Name:</label>
            <input type="text" id="product-name" name="product-name">
        </div>
        <div class="form-group">
            <label for="product-price">Product Price:</label>
            <input type="num" id="product-price" name="product-price">
        </div>
        <div class="form-group">
            <label for="product-category">Product Category:</label>
            <input type="text" id="product-category" name="product-category">
        </div>
        <div class="form-group">
            <label for="product-image">Product Image:</label>
            <input type="num" id="product-image" name="product-image">
        </div>
        <div class="form-group">
            <label for="product-id">Product ID:</label>
            <input type="text" id="product-id" name="product-id">
        </div>
        <div class="form-group">
            <label for="product-description">Product Description:</label>
            <input type="num" id="product-description" name="product-description">
        </div>
        <button type="submit" class="btn">Add Product</button>
    </form>
</div>
</div>

@endsection