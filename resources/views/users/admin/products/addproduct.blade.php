
@extends('users/admin.main')
@section('content')
<div class="admin-container">
    <div class="container">
        <h2 style="color: rgb(107, 40, 169)">{{ $title }}</h2>
        <div class="container">
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ma">ID</label>
                <input type="text" class="form-control" name="ma" placeholder="nhap ma san pham " required="">
              </div>
              <div class="form-group">
                <label for="ten">Product name:</label>
                <input type="text" class="form-control" name="ten" placeholder="Enter product name" required="">
              </div>
              <div class="form-group">
                <label for="sdt">Product price</label>
                <input type="text" class="form-control" name="sdt" placeholder="nhap product price" required="">
              </div>
              <div class="form-group">
                <label for="namsinh">Description:</label>
                <input type="text" class="form-control" name="namsinh" placeholder="nhap description" required="">
              </div>
              <div class="form-group">
                <label for="namsinh">Product image:</label>
                <input type="file"  name="img" required="">
              </div>
              <input type="submit" name="submit" class="btn btn-primary" style="float:left;" value="Add">
            </form>
          </div>
    </div>
</div>
@endsection