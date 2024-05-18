const btn_delete = document.querySelectorAll('.btn-delete');

btn_delete.forEach(function(element){
    element.addEventListener("click", function(event){
        event.preventDefault();
        let urlRequest = $(this).data('url');
        let that = $(this);
        console.log(that.parent().parent());
        Swal.fire({
            title: "Bạn có chắc muốn xóa không?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
          }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({                   
                    type: 'GET',
                    url: urlRequest,                   
                    success: function(data){
                       if (data.code == 200){
                            that.parent().parent().remove();
                            Swal.fire({
                                title: "Đã xóa",
                                text: "Xóa thành công",
                                icon: "success"
                              });
                       }
                    },
                    error: function(){
                        Swal.fire({
                            title: "Không xóa được",
                            text: "Không thể xóa vì còn sản phẩm trong danh mục",
                            icon: "error"
                          });                    }
                });
           
            }
          });
    })
})


