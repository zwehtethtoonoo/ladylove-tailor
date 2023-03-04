
$(document).ready(function(){

	// if the user clicks on the like button ...
	$('.like_btn').on('click', function(){
	  var ideaid = $(this).data('id');
	  alert(ideaid);
	  // $clicked_btn = $(this);


	// for like button, you can only like or dislike
	  	// if ($clicked_btn.hasClass('fa-thumbs-o-up')) {
	  	// 	action = 'like'; 

	  	// } else if ($clicked_btn.hasClass('fa-thumbs-up')) {
	  	// 	action = 'unlike';
	  	// }

	  	// $.ajax({
	  	// 	url: '../idea_details.php?ideaid=<?php echo $ideaid ?>',
	  	// 	type: 'post',
	  	// 	data: {
	  	// 		'action': action,
	  	// 		'ideaid': ideaid

	  	// 	},
	  	// 	success: function(data){
	  	// 		res = JSON.parse(data);

	  	// 		if (action == 'like') {
	  	// 			$clicked_btn.removeClass('fa-thumbs-o-up');
	  	// 			$clicked_btn.addClass('fa-thumbs-up');
	  	// 			alert('liked');
	  	// 		} else if (action == 'unlike') {
	  	// 			$clicked_btn.removeClass('fa-thumbs-up');
	  	// 			$clicked_btn.addClass('fa-thumbs-o-up');
	  	// 		}

	  	// 	}
	  	// })
	});

	
});