var home = {};

home.getChild = function(id, obj){
	if($(obj).parents('.each_comment_user').find('.bottom_comment').is(":visible")){
		$(obj).parents('.each_comment_user').find('.bottom_comment').hide();
	} else {
		$(obj).parents('.each_comment_user').find('.bottom_comment').show();
		$(obj).parents('.each_comment_user').find('.each_sub_data').remove();
		$.ajax({
			url: '/create/childcomment',
			data: {id: id},
			type: 'POST',
			success: function (result) {
				if (result.success) {
					$('.each_comment_user[data-id='+ id +'] .block_append_comment').append(result.data);
				}
			}
		});
	}
	
};

$('.each_comment_user').on('keyup', 'input[name=submit_comment]', function(e){
	if(e.keyCode == 13){
		if($(this).val() == ''){
			return false;
		}
		//AJAX
		var lession_id = $(this).parents('.each_comment_user').attr('data-lession');
		var course_id = $(this).parents('.each_comment_user').attr('data-course');
		var id = $(this).parents('.each_comment_user').attr('data-id');
		var content = $(this).val();
		$.ajax({
			url: '/create/savecomment',
			data: {id: id, course_id: course_id, lession_id: lession_id, content: content},
			type: 'POST',
			success: function (result) {
				if (result.success) {
					$('.each_comment_user[data-id='+ id +']').find('.block_append_comment').prepend(result.data);
					$('.each_comment_user[data-id='+ id +']').find('.submit_comment').val('');
				}
			}
		});
	}
});

var delay = (function(){
  var timer = 0;
  return function(callback, ms){
    clearTimeout (timer);
    timer = setTimeout(callback, ms);
  };
})();

home.saveChild = function(id){
	$.ajax({
        url: '/create/savecomment',
		data: {id: id},
        type: 'POST',
        success: function (result) {
            if (result.success) {
                $('.each_comment_user[data-id='+ id +'] .bottom_comment').append(result.data);
            }
        }
    });
}

home.hide = function(id){
	var cf = confirm("Bạn muốn ẩn comment này ?");
	if(cf){
		$.ajax({
			url: '/create/hidecomment',
			data: {id: id},
			type: 'POST',
			success: function (result) {
				if (result.success) {
					$('.each_comment_user[data-id='+ id +']').remove();
				}
			}
		});
	}
}

setInterval(function(){
	var id = $(".each_comment_user:first-child").attr("data-id");
	$.ajax({
        url: '/create/refreshcm',
		data: {id: id},
        type: 'POST',
        success: function (result) {
            if (result.success) {
                $('.block_show_comment').prepend(result.data);
            }
        }
    });
}, 300000);