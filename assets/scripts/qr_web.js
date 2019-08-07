$(document).ready(function() {
	$("#qr_web_success_modal").css('display', "none");
	let scanner = new Instascan.Scanner({
		video: document.getElementById('preview')
	});
	scanner.addListener('scan', function(content) {
		$.ajax({
			url: "http://localhost:8080/qr_localhost/welcome/qr_add",
			type: "POST",
			dataType: "json",
			data: {
				"qr_url": content
			},
			success: function(data) {
				if (data.qr == false) {
					$("#response_message").css('display', "none");
					$("#response_message_body").css('display', "none");
					$("#participant_name").css('display', "none");
					document.getElementById("response_message_error").innerHTML = "Whoops!";
					document.getElementById("response_message_body_error").innerHTML = "We couldn’t match that QR code with an active trainee or employee. Please try again.";
					document.getElementById("participant_name_error").innerHTML = "If you have tried multiple times, please approach a CCE officer.";
					$("#response_message_error").css('display', "block");
					$("#response_message_body_error").css('display', "block");
					$("#participant_name_error").css('display', "block");
				} else {
					for (var i = 0; i < data['qr'].length; i++) {
						$("#response_message_error").css('display', "none");
						$("#response_message_body_error").css('display', "none");
						$("#participant_name_error").css('display', "none");
						document.getElementById("response_message").innerHTML = "Success!";
						document.getElementById("response_message_body").innerHTML = "Enjoy the party,";
						document.getElementById("participant_name").innerHTML = data['qr'][i].first_name + "!";
						$("#response_message").css('display', "block");
						$("#response_message_body").css('display', "block");
						$("#participant_name").css('display', "block");
					}
				}
				$("#qr_web_success_modal").modal('show');
				$("#qr_web_success_modal").css('display', "block");
				setTimeout(function(){
				  $('#qr_web_success_modal').modal('hide')
				}, 5000);
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert(jqXHR);
				$("#pre-elem").text(JSON.stringify(textStatus))
				console.log(errorThrown)
			}
		});
	});
	Instascan.Camera.getCameras().then(function(cameras) {
		if (cameras.length > 0) {
			scanner.start(cameras[0]);
		} else {}
	}).catch(function(e) {
		console.error(e);
	});
});
