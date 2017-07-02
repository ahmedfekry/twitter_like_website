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
                                <li><a href="#" class="likeTweet" class="link-black text-sm"><i id="'+data.id+'" class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>\
                                </li>\
                                <li class="pull-right">\
                                  <a href="#" id="likes_'+data.id+'" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> likes(0)</a>\
                                </li>\
                              </ul>\
                            </div>\
                            <hr>');
			}
		});
		
	});

  $('#search-input').keyup(function(event) {
    // alert(baseUrl);
    var url = baseUrl+'/userSearch/'+$(this).val();
    if ($(this).val() != "") {
      $.ajax({
        url: url,
        type: 'GET',
        success: function (data) {
          // console.log(data);
          $('#searchGroup').empty();
          for (var i = 0; i < data.length; i++) {
            $('#searchGroup').append('\
                <a href="'+baseUrl+'/'+data[i].username+'" class="list-group-item list-group-item-action ">\
                    <h6 class="list-group-item-heading">'+data[i].username+'</h6>\
                </a>');
          }
        }
      }); 
    }
  });
});

$('.likeTweet').click(function(event) {
  var id = $(this).children().attr('id');
  $.ajax({
    url: baseUrl+"/tweet/"+id+"/like",
    type: 'GET',
    success: function (data) {
      if (data && data.status == 200) {
        $('#likes_'+id).html('<i class="fa fa-thumbs-o-up margin-r-5"></i> likes('+data.count+')')
        $('#likes_'+id).parent('li').prev('li').find('a').remove();
        $('#likes_'+id).parent('li').parent('ul').append('<li>Liked</li>')
      }
    }
  });
  
});