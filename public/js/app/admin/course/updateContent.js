




function editChapter(id) {
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({

      url : adminUrl + "/course/getChapter",

      type : 'post',

      cache : false,

      data : {id: id},

      success : function(data){
        var d = JSON.parse(data);
        $('#nameChapter').val(d.name);
        $('#idChapter').val(d.id);
        $('#modalChapter').modal('show');
      },

      error: function() {
        toastr.error('Xảy ra lỗi, vui lòng load lại trang!','Thông báo.' );
      }
  });
}












function showModalDeleteChapter(idObjectDelete = 1) {
	var contentMessageDelete = '<p>Bạn muốn xóa nội dung này?</p><p>Các bài học trong nội dung này cũng sẽ bị xóa.</p>';
	var functionNameCallBackDelete = 'deleteChapter';
	$("#contentMessageDelete").html(contentMessageDelete);
	$("#functionNameCallBackDelete").val(functionNameCallBackDelete);
	$("#idObjectDelete").val(idObjectDelete);
	$('#modalDeleteObject').modal('show');
}



function deleteChapter() {
	$('#modalDeleteObject').modal('hide');

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({

    url : adminUrl + "/course/deleteChapter",

    type : 'post',

    cache : false,

    data : {id: $("#idObjectDelete").val()},

    success : function(data){
      if (data == 'true') {
        toastr.success('Xóa thành công!','Thông báo.' );
      }
    },

    error: function() {
      toastr.error('Xảy ra lỗi, vui lòng load lại trang!','Thông báo.' );
    }
  });
}


function showModalChapter() {
  $('#nameChapter').val(null);
  $('#idChapter').val(null);
	$('#modalChapter').modal('show');
}


function submitFormChapter() {
	var messageForm = $('#formChapter');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    messageForm.ajaxForm({
      uploadProgress: libProgressBar,
      success:function(data){
        $('#idChapter').val(data);
        toastr.success('Lưu thành công!','Thông báo.' );
        $('#modalProgress').modal('hide');
        $('#modalChapter').modal('hide');
      },

      error:function(e){
        toastr.error('Xảy ra lỗi, vui lòng thử lại!','Thông báo.' );
        $('#modalProgress').modal('hide');
      }
    }).submit();
}



function moDalVideo() {
	$("#urlVideo").attr("src","https://youtu.be/vJTbCoO5E6E");
	var html = '<iframe width="560" height="315" src="http://vip4.vtv16.com/iframe/Z2VWJTJCWmFnTndEWVVxJTJGSlR1YmFRWUFKJTJCcldEdlJSbVNTM2h3QUgzcnhIVjFVZzdJbFd6JTJGdFFraUN4ZDNOcERTelNnT1RUVWpkSGpVY0RNaFQ5d2gydyUzRCUzRA==.html?redirect=http%3A%2F%2Fwww.vtv16.com%2Fphim%2Fdien-hi-cong-luoc-i2-6115%2Ftap-36-81636.html" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
	$('#contentModalVideo').html(html);
	$('#modalVideo').modal('show');
}
