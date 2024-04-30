@extends('users.admin.layout.admin')
<!--Container-->
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">{{ $title }}</h4>
            </div>
        </div>

        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="ten">Tên sản phẩm:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    placeholder="Nhập tên sản phẩm" required="" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Danh mục:</label>
                <select class="form-control @error('category') is-invalid @enderror" name="category" required="">
                    <!-- Option để chọn danh mục -->
                    <option value="">Chọn tên danh mục sản phẩm</option>
                    <!-- PHP code để lấy danh mục từ cơ sở dữ liệu và tạo các option tương ứng -->
                    {!! $option !!}
                </select>
                @error('category')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="namsinh">Mô tả:</label>
                <textarea class="form-control my-editor @error('description') is-invalid @enderror" name="description" id=""
                    cols="30" rows="10" placeholder="Nhập mô tả sảm phẩm" required="">{{ old('name') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Giá:</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    placeholder="Nhập giá sản phẩm" required="" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sdt">Giảm giá</label>
                <input type="text" class="form-control @error('price_sale') is-invalid @enderror" name="price_sale"
                    placeholder="Nhập giá giảm" value="{{ old('price_sale') }}" required="">
                @error('price_sale')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="soluong">Số lượng</label>
                <input type="number" class="form-control" name="qty" value="{{ old('qty') }}" required="">
            </div>
            <div class="form-group">
                <label for="namsinh">Hình ảnh sản phẩm:</label>
                <input type="file" name="img" class="form-control-file" required="">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="ADD">
        </form>
    </div>
@endsection
