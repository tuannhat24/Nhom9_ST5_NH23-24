
@extends('users.admin.layout.admin')
<!--Container-->
@section('content')
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">{{$title}}</h4>			
		</div>		
	</div>

	<form action="{{route('admin.product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="ten">Tên sản phẩm:</label>
      <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm" required="" value="{{$product->name}}">
    </div>
    <div class="form-group">
      <label for="category">Danh mục:</label>
      <select class="form-control" name="category" required="">
          <!-- Option để chọn danh mục -->
          <option value="0">Chọn tên danh mục sản phẩm</option>
          <!-- PHP code để lấy danh mục từ cơ sở dữ liệu và tạo các option tương ứng -->
          {!!$option!!}
      </select>
    </div>
    <div class="form-group">
      <label for="namsinh">Mô tả:</label>
      <textarea class="form-control my-editor" name="description" id="" cols="30" rows="10" placeholder="Nhập mô tả sảm phẩm">{{$product->name}}</textarea>
    </div>
    <div class="form-group">
      <label for="sdt">Giá</label>
      <input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm" value="{{$product->price}}">
    </div>
    <div class="form-group">
      <label for="sdt">Giảm giá</label>
      <input type="text" class="form-control" name="price_sale" placeholder="Nhập giá giảm" value="{{$product->price_sale}}">
    </div>
    <div class="form-group">
      <label for="soluong">Số lượng</label>
      <input type="number" class="form-control" name="qty" value="{{$product->quantity_sold}}">
    </div>
    <div class="form-group">
      <label for="namsinh">Hình ảnh sản phẩm:</label>
      <input type="file" name="img" class="form-control-file">
      <div class="col-md-12 mt-2">
        <div class="row">
          <img class="product_img" src="{{ asset('assets/img/' . $product->image) }}" alt="">
        </div>
      </div>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="EDIT">
  </form>
</div>

@endsection


