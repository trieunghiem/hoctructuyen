



function getListData(pag) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({

        url : adminUrl + "/course/list",

        type : 'post',

        cache : false,

        data : {pag: pag, itemsPerPage: $('#itemsPerPage').val(), search: $('#search').val()},

        success : function(data){
        	var d = JSON.parse(data);
			var htm = '';
			$.each(d.data, function (index, value) {
                    
                htm += "<tr role='row' class='odd'>";
                htm += "<td>" + value.name + "</td>";
                // htm += "<td><img src='" + urlStorage + value.avatar + "' style='width: 120px;'></td>";
                htm += "<td>";
                if(value.show_home == null){
                	htm += "<input type='checkbox' data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateShowHomeOfCourse(" + value.id + ", $(this))'> ";
                }else{
                	htm += "<input type='checkbox' checked data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateShowHomeOfCourse(" + value.id + ", $(this))'> ";
                }

                if (value.status == 'OK') {
                	htm += " <input type='checkbox' checked data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateStatusOfCourse(" + value.id + ", $(this))'>";
                }else{
                	htm += " <input type='checkbox' data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateStatusOfCourse(" + value.id + ", $(this))'>";
                }

                if (value.promotion == null) {
                    htm += " <input type='checkbox' data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updatePromotionOfCourse(" + value.id + ", $(this))'>";
                }else{
                    htm += " <input type='checkbox' checked data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updatePromotionOfCourse(" + value.id + ", $(this))'>";
                }
                
                htm += "</td>";
                htm += "<td>";
                htm += "<button type='button' class='btn btn-warning btn-sm' onclick='viewCourse(" + value.id + ")'><i class='fa fa-eye'></i></button> ";
                htm += " <button type='button' class='btn btn-danger btn-sm' onclick='libRemoveRowLearn(" + value.id + ")'><i class='fa fa-trash-o'></i></button>";
                htm += "</td>";
                htm += "</tr>";
            });

            $('#listDataCourse').html('');
            $('#listDataCourse').append(htm);
            $("[data-toggle='toggle']").bootstrapToggle('destroy')                 
    		$("[data-toggle='toggle']").bootstrapToggle();
        },

        error: function() {
        	toastr.error('Xảy ra lỗi, vui lòng load lại trang!','Thông báo.' );
        }
    });
}




function updatePromotionOfCourse(id, val) {
    if (val.is(':checked')) {
        var check = 'OK';
    } else {
        var check = 'NO';
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({

        url : adminUrl + "/course/updatePromotionOfCourse",

        type : 'post',

        cache : false,

        data : {id: id, check: check},

        success : function(data){
            if (data == 'true') {
                toastr.success('Cập nhật thành công!','Thông báo.' );
            }
        },

        error: function() {
            toastr.error('Xảy ra lỗi, vui lòng load lại trang!','Thông báo.' );
        }
    });
}


function updateShowHomeOfCourse(id, val) {
    if (val.is(':checked')) {
        var check = 'OK';
    } else {
        var check = 'NO';
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({

        url : adminUrl + "/course/updateShowHomeOfCourse",

        type : 'post',

        cache : false,

        data : {id: id, check: check},

        success : function(data){
            if (data == 'true') {
                toastr.success('Cập nhật thành công!','Thông báo.' );
            }
        },

        error: function() {
            toastr.error('Xảy ra lỗi, vui lòng load lại trang!','Thông báo.' );
        }
    });

}




function updateStatusOfCourse(id , val) {
    if (val.is(':checked')) {
        var check = 'OK';
    } else {
        var check = 'NO';
    }
    

    $('#modalDeleteObject').modal('hide');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({

        url : adminUrl + "/course/updateStatusOfCourse",

        type : 'post',

        cache : false,

        data : {id: id, check: check},

        success : function(data){
            if (data == 'true') {
                toastr.success('Cập nhật thành công!','Thông báo.' );
            }
        },

        error: function() {
            toastr.error('Xảy ra lỗi, vui lòng load lại trang!','Thông báo.' );
        }
    });
}



function viewCourse(id) {
    window.open(adminUrl + "/course/update/" + id,'_blank');
}


$(document).ready(function () {

    getListData(1);

});