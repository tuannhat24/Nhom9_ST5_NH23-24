
@extends('users.admin.layout.admin')
<!--Container-->
@section('content')
<div class="pd-20 card-box mb-30">
	<div class="clearfix mb-20">
		<div class="pull-left">
			<h4 class="text-blue h4">{{$title}}</h4>			
		</div>		
	</div>

	<form action="{{route('admin.slider.update', ['id' => $slider->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="ten">Tên Slider:</label>
      <input type="text" class="form-control" name="name" placeholder="Nhập tên Slider" required="" value="{{$slider->name}}">
    </div>
    <div class="form-group">
      <label for="description">Mô Tả:</label>
      <textarea class="form-control" name="description" id="" cols="30" rows="10" placeholder="Nhập mô tả slider">{{$slider->description}}</textarea>
    </div>

    <div class="form-group">
      <label for="img">Hình ảnh:</label>
      <input type="file" name="img_path" class="form-control-file">
      <div class="col-md-12 mt-2">
        <div class="row">
            <img class="product_img" src="{{ $slider->img_path }}" alt="">
        </div>
      </div>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="EDIT">
  </form>
</div>

@endsection

