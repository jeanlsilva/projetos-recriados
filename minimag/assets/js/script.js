jQuery(function(){
	jQuery('.mainfooter_scroll').on('click', function() {
		jQuery(document.body).scrollTop(0);
	});
	
	jQuery('.loadmoreButton').on('click', function() {
		var offset = jQuery('.postscontent article').length;
		//alert("OFFSET: "+offset);
		jQuery.ajax({
			type: 'POST',
			url: ajaxUrl,
			data: {action: 'LoadMorePosts', offset:offset},
			success: function(html) {
				if(html != '') {
					jQuery('.postscontent').append(html);
				} else {
					jQuery('.loadmoreButton').hide();
				}
			}
		});
	});
});