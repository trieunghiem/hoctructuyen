function getCategory(id) {
    
    document.getElementById("formCategory").reset();

    $('#idCategory').val('');


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({

        url : adminUrl + "/course/getInfoCategory",

        type : 'post',

        cache : false,

        data : {id: id},

        success : function(data){
            var d = JSON.parse(data);

            $('#idCategory').val(d.id);
            $('#nameCategory').val(d.name);
            $('#slugCategory').val(d.slug);
            $('#titleCategory').val(d.tittle);
            $('#descriptionCategory').val(d.description);

            $("#anh_chinh").attr('src', urlStorage + d.og_image);

            if (d.status == 'OK') {
                $('#statusShowCategory').html('<input type="checkbox" checked name="status" data-toggle="toggle" data-onstyle="success" data-size="small">');
            } else {
                $('#statusShowCategory').html('<input type="checkbox" name="status" data-toggle="toggle" data-onstyle="success" data-size="small">');
            }

            if (d.show_home == 'OK') {
                $('#statusShowHome').html('<input type="checkbox" checked name="statusHome" data-toggle="toggle" data-onstyle="success" data-size="small">');
            } else {
                $('#statusShowHome').html('<input type="checkbox" name="statusHome" data-toggle="toggle" data-onstyle="success" data-size="small">');
            }

            $("[data-toggle='toggle']").bootstrapToggle('destroy')                 
            $("[data-toggle='toggle']").bootstrapToggle();
            
            $('#modalCategory').modal('show');
            
        },

        error: function() {
            toastr.error('Xảy ra lỗi, vui lòng load lại trang!','Thông báo.' );
        }
    });
}


function showModalCategory() {
    document.getElementById("formCategory").reset();
    $('#idCategory').val('');
    $("#anh_chinh").attr('src', '');
    $('#modalCategory').modal('show');
}




function submitFormCategory() {
    $('#modalCategory').modal('hide');
    var messageForm = $('#formCategory');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    messageForm.ajaxForm({
        uploadProgress: libProgressBar,
        success:function(data){
            $('#modalProgress').modal('hide');
            toastr.success('Lưu thành công!','Thông báo.' );
            
        },

        error:function(e){
            toastr.error('Xảy ra lỗi, vui lòng thử lại!','Thông báo.' );
            $('#modalProgress').modal('hide');
        }
    }).submit();
}