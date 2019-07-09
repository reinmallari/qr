$(document).ready(function() {
	let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
	scanner.addListener('scan', function (content) {
	  alert(content);
	});
	var val = content;
	$('ul.qr_content_list').append('<li>' + val + '</li>');
	Instascan.Camera.getCameras().then(function (cameras) {
	  if (cameras.length > 0) {
	    scanner.start(cameras[0]);
	    console.log(cameras[0].name);
	    document.getElementById("camera_name").innerHTML = cameras[0].name;
	  } else {
	    document.getElementById("camera_name").innerHTML = "No cameras found";
	  }
	}).catch(function (e) {
	  console.error(e);
	});
});
