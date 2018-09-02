



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
                	htm += "<input type='checkbox' data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateShowHomeOfCourse(" + value.id + ")'> ";
                }else{
                	htm += "<input type='checkbox' checked data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateShowHomeOfCourse(" + value.id + ")'> ";
                }

                if (value.status == 1) {
                	htm += " <input type='checkbox' checked data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateStatusOfCourse(" + value.id + ")'>";
                }else{
                	htm += " <input type='checkbox' data-toggle='toggle' data-onstyle='success' data-size='small' onchange='updateStatusOfCourse(" + value.id + ")'>";
                }
                
                htm += "</td>";
                htm += "<td>";
                htm += "<button type='button' class='btn btn-warning btn-sm' onclick='libRemoveRowLearn(" + value.id + ")'><i class='fa fa-eye'></i></button> ";
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




function updateShowHomeOfCourse(id) {
	alert('trieu ' + id);
}


function updateStatusOfCourse(id) {
	alert('trieu ga ' + id);
}




$(document).ready(function () {

    getListData(1);

});