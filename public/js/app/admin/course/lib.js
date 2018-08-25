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
        // $('#id_new').val(data);
        toastr.success('Lưu thành công!','Thông báo.' );
        $('#modalProgress').modal('hide');
      },

      error:function(e){
        toastr.error('Xảy ra lỗi, vui lòng thử lại!','Thông báo.' );
        $('#modalProgress').modal('hide');
      }
    }).submit();
  
}