/* Handles clicks on button and relays information to post.php */
$(document).ready(function() { // initialize
	refresh_content();
	$( 'button#chatSubmit').on('click', function() { // on click of submit btn create anon fn

		// get values from user input fields
		var nameFromUser = $('input#myUsername').val(); 
		var userMessage = $('input#myMessage').val();

		// trim spaces before assessing if fields are empty and pushing into post
		if ($.trim(nameFromUser) != '' && $.trim(userMessage) != '') {
			// POST to post.php, json object pushes in data and loads retreived data
			$.post('post.php', {username: nameFromUser, message: userMessage}, function() {
				$('#viewShouts').load('getdata.php');
			});
		}
	});
});

// refreshes the entire div block
function refresh_content() {
	setInterval(function(){ $('#viewShouts').load('getdata.php');}, 100);
	}

