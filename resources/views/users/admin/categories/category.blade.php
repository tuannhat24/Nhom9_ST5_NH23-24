@extends('users/admin.main')
@section('content')
<div class="admin-container">
    <div class="container">
        <h2 style="color: rgb(107, 40, 169)">{{$title}}</h2>
        <div class="container">
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" name="id" placeholder="Enter ID" required="">
              </div>
              <div class="form-group">
                <label for="ten">Category Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
              </div>
              <div class="form-group">
                <label for="category">Parent category</label>
                <select class="form-control" name="parent_category" required="">
                    <!-- Option để chọn danh mục -->
                    <option value="">Select a category</option>
                    <!-- PHP code để lấy danh mục từ cơ sở dữ liệu và tạo các option tương ứng -->
                </select>
              </div>
              <div class="form-group">
                <label for="sdt">Description:</label>
                <input type="text" class="form-control" name="description" placeholder="Enter description" required="">
              </div>
              <input type="submit" name="submit" class="btn btn-primary" style="float:left;" value="Add">
            </form>
          </div>
    </div>
</div>
@endsection