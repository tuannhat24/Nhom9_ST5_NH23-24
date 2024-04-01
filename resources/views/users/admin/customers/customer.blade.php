@extends('users/admin.main')
@section('content')
<!--  -->
<div class="admin-container">
    <div class="container">
        <h1>{{ $title }}</h1>
        <form action="#">
            <div class="form-group">
                <label for="customer-name">Customer Name:</label>
                <input type="text" id="customer-name" name="customer-name">
            </div>
            <div class="form-group">
                <label for="customer-price">Customer Price:</label>
                <input type="num" id="customer-price" name="customer-price">
            </div>
            <button type="submit" class="btn">Add Customer</button>
        </form>
    </div>
</div>

@endsection