

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