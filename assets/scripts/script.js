$(document).ready(function () {
  $('.favoriteFruit').click(function(event) {
		$.ajax({
			type: "POST",
			url: '/home',
			data: {
				id: event.target.id,
				val: $('#' + event.target.id).is(":checked")
			},
			success: function (data) {
				if (data.indexOf("You can have only 10 favorite fruits!") >= 0){
					$('#' + event.target.id).prop('checked', false);					
					alert("You can have only 10 favorite fruits!");
				}
				console.log('it worked');
			},
			error: function (xhr, status, error) {
				console.log('it broke');
			},
			complete: function () {
				console.log('it completed');
			}
		});
	});
});
