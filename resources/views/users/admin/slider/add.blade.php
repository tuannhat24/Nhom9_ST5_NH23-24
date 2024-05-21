 @extends('users.admin.layout.admin')
 @section('js')
     {{-- <script src="https://cdn.tiny.cloud/1/nymzs9hxuibktema7sjx487fimwtfztxjl0i7w89tsm04d1f/tinymce/7/tinymce.min.js"
         referrerpolicy="origin"></script> --}}
     <script src="{{ asset('admins/tinymce.min.js') }}"></script>
     <script>
         tinymce.init({
             selector: 'textarea[name="description"]',
             plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
             toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
         });
     </script>
 @endsection
 <!--Container-->
 @section('content')
     <div class="pd-20 card-box mb-30">
         <div class="clearfix mb-20">
             <div class="pull-left">
                 <h4 class="text-blue h4">{{ $title }}</h4>
             </div>
         </div>

         <form action="{{ route('admin.slider.store') }}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="form-group">
                 <label for="name">Tên Slider</label>
                 <input type="text" class="form-control" name="name" placeholder="Nhập tên slider" required="">
             </div>

             <div class="form-group">
                 <label for="des">Mô tả:</label>
                 <textarea class="form-control" name="description" id="description" cols="30" rows="10"
                     placeholder="Nhập mô tả slider"></textarea>
             </div>
             <div class="form-group">
                 <label for="img">Hình Ảnh</label>
                 <input type="file" class="form-control-img @error('img') is-invalid @enderror"" name="img" placeholder="Chọn hình ảnh"
                     required=""></input>
                 @error('img')
                     <div class="alert alert-danger">{{ $message }}</div>
                 @enderror
             </div>
             <input type="submit" name="submit" class="btn btn-primary" value="Thêm">
         </form>
     </div>
 @endsection
