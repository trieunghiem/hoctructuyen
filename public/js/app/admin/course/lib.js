function submitFormCourse() {

  // toastr.success('Lưu thành công!','Thông báo.' );



  var messageForm = $('#formCourse');

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    if (typeof CKEDITOR !== 'undefined') {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances['content'].updateElement();
        }
    }
    messageForm.ajaxForm({
      uploadProgress: libProgressBar,
      success:function(data){
        $('#courseId').val(data);
        toastr.success('Lưu thành công!','Thông báo.' );
        $('#modalProgress').modal('hide');
        $("#fileCourse").val("");
        $("#file_anh_chinh").val("");
      },

      error:function(e){
        toastr.error('Xảy ra lỗi, vui lòng thử lại!','Thông báo.' );
        $('#modalProgress').modal('hide');
      }
    }).submit();
  
}