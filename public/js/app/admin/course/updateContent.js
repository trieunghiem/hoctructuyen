


function showModalDeleteChapter(idObjectDelete = 1) {
	var contentMessageDelete = 'html';
	var functionNameCallBackDelete = 'deleteChapter';
	$("#contentMessageDelete").html(contentMessageDelete);
	$("#functionNameCallBackDelete").val(functionNameCallBackDelete);
	$("#idObjectDelete").val(idObjectDelete);
	$('#modalDeleteObject').modal('show');
}



function deleteChapter() {
	$('#modalDeleteObject').modal('hide');
	alert('trieu ' + $("#idObjectDelete").val());
}


function showModalChapter() {
	$('#modalChapter').modal('show');
}