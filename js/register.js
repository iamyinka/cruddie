$(document).ready(function() {
	$('#submit-btn').click(function() {
		var email = $("#email").val();
		var fname = $("#fname").val();
		var lname = $("#lname").val();
		var password = $("#password").val();
		
		var valid = true;
		
		if(fname == '') {
			valid = false;
			$("#eFname").html('<div class="alert alert-danger">First Name cannot be empty</div>');
		} else {
			$("#eFname").html('');
		}
		
		if(lname == '') {
			valid = false;
			$("#eLname").html('<div class="alert alert-danger">Last Name cannot be empty</div>');
		} else {
			$("#eLname").html('');
		}
		
		if(email == '') {
			valid = false;
			$("#eEmail").html('<div class="alert alert-danger">Email cannot be empty</div>');
		} else {
			$("#eEmail").html('');
		}
		
		if(password == '') {
			valid = false;
			$("#ePassword").html('<div class="alert alert-danger">Password cannot be empty</div>');
		} else {
			$("#ePassword").html('');
		}
		
		if(valid) {
			var formData = {
				fname: fname,
				lname: lname,
				email: email,
				password: password
			};
			
			$.ajax({
				url: "../cmds/insert.php",
				type: "POST",
				data: formData,
				success: function(data) {
					
				}
			});
		}
	});
})