
 
@extends('users.admin.layout.admin')
<!--Container-->
@section('content')
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">{{$title}}</h4>			
		</div>		
	</div>

	<form action="{{ route('admin.category.update', ['id' => $category->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Tên Danh Mục</label>
      <input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục" value="{{$category->name}}" required="">
    </div>
    <div class="form-group">
      <label for="category">Chọn Danh Mục Cha</label>
      <select class="form-control" name="parent_id" required="" >
          <!-- Option để chọn danh mục -->
          <option value="0"></option>
          {!!$option!!}
          <!-- PHP code để lấy danh mục từ cơ sở dữ liệu và tạo các option tương ứng -->
      </select>
    </div>
    <div class="form-group">
      <label for="description">Mô Tả</label>
      <textarea class="form-control" cols="50" rows="10" name="description" required="">{{$category->description}}</textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Edit">
  </form>
</div>

@endsection


