@extends('users/admin.main')
@section('content')
<div class="admin-container">
    <div class="container">
        <h2 style="color: rgb(107, 40, 169)">Thêm danh mục</h2>
        <div class="container">
            <form action="../controller/addSinhVien.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <label for="ma">Mã:</label>
                <input type="text" class="form-control" name="ma" placeholder="nhap ma sinh vien" required="">
              </div>
              <div class="form-group">
                <label for="ten">Tên:</label>
                <input type="text" class="form-control" name="ten" placeholder="nhap ten" required="">
              </div>
              <div class="form-group">
                <label for="sdt">Số điện thoại:</label>
                <input type="text" class="form-control" name="sdt" placeholder="nhap so dien thoai" required="">
              </div>
              <div class="form-group">
                <label for="namsinh">Năm sinh:</label>
                <input type="text" class="form-control" name="namsinh" placeholder="nhap nam sinh" required="">
              </div>
              <div class="form-group">
                <label for="namsinh">Hình ảnh:</label>
                <input type="file"  name="img" required="">
              </div>
              <input type="submit" name="submit" class="btn btn-primary" style="float:left;" value="Add">
            </form>
          </div>
    </div>
</div>
@endsection