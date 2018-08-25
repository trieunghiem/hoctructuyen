

function libAddRowLearn(addRow) {
	var htm = '<div class="learn-box">';
        htm += '<input type="text" class="form-control">';
        htm += '<button type="button" name="learnWhat[]" class="btn btn-danger btn-sm" onclick="libRemoveRowLearn($(this))">';
        htm += '<i class="fa fa-trash-o"></i>';
        htm += '</button>';
        htm += '</div>';

    addRow.closest('div.row-learn').append(htm);
}


function libRemoveRowLearn(remove) {
	remove.closest('div').remove();
}


function libChangeAnhChinh(input){

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
           $("#anh_chinh").attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        $("#anh_chinh").show();
    } else {
        $("#anh_chinh").attr('src', input.value);
        $("#anh_chinh").show();
    }
}


function libImgAnhChinh() {
	$("#file_anh_chinh").click();
}




function libProgressBar(event, position, total, percentComplete) {
	$('#modalProgress').modal({
	    backdrop: 'static',
	    keyboard: false
    });
	$("#progressbarContent").width((percentComplete - 1) + '%');
	$("#progressbarContent").html((percentComplete -1) +'%');
}