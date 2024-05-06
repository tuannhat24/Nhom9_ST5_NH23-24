

@extends('users.admin.layout.admin')
<!--Container-->
@section('content')
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">{{ $title }}</h4>
            </div>
        </div>

        <form action="{{route('admin.slider.store')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name">Tên Slider</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên slider" required="">
          </div>
          
          <div class="form-group">
            <label for="description">Mô Tả</label>
            <textarea class="form-control" cols="30" rows="10" name="description" placeholder="Nhập mô tả slider" required=""></textarea>
          </div>
          <div class="form-group">
            <label for="description">Hình Ảnh</label>
            <input type="file" class="form-control-img" name="img_path" placeholder="Chọn hình ảnh" required=""></input>
          </div>
          <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
        </form>
    </div>
@endsection
