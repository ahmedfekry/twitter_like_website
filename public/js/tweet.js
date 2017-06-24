jQuery(document).ready(function($) {
	$('#submitTweet').submit(function() {
		event.preventDefault();
		var url = $(this).attr('action');
		$.ajax({
			url: url,
			type: 'POST',
			data: {tweet: $(this).find('textarea').val()},
			success: function (data) {
				$('#submitTweet').trigger('reset');
				$('#search-advance').prepend('<div class="post">\
                              <div class="user-block" style="margin-bottom: 2%;">\
                                <img class="img-circle img-bordered-sm" src="img/demo/80x80.gif" alt="user image">\
                                    <span class="username">\
                                      <a href="#">'+data.username+'</a>\
                                      <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>\
                                    </span>\
                              </div>\
                              <!-- /.user-block -->\
                              <p style="margin-left: 2%;">'+data.text+'</p>\
                              <ul class="list-inline">\
                                <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>\
                                </li>\
                                <li class="pull-right">\
                                  <a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> likes(5)</a>\
                                </li>\
                              </ul>\
                            </div>\
                            <hr>');
			}
		});
		
	});
});