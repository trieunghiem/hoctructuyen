

function libAddRowLearn(addRow) {
	var htm = '<div class="learn-box">';
        htm += '<input type="text" name="learn_what[]" class="form-control">';
        htm += '<button type="button" class="btn btn-danger btn-sm" onclick="libRemoveRowLearn($(this))">';
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





    function getAlias(str){
        str = str.valueOf().toLowerCase();
        str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
        str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
        str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
        str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
        str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
        str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
        str = str.replace(/đ/g, "d");
        str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-");
        str = str.replace(/-+-/g, "-");
        str = str.replace(/^\-+|\-+$/g, "");
        str = str.replace(/–/g, "");
        return str;
    }

    function changeTitle(str, id) {
      var alias = getAlias(str);
      $(id).val(alias);
    }