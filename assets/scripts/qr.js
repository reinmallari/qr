function openQRCamera(node) {
  var reader = new FileReader();
  reader.onload = function() {
    node.value = "";
    qrcode.callback = function(res) {
      if(res instanceof Error) {
        alert("No QR code found. Please make sure the QR code is within the camera's frame and try again.");
      } else {
        node.parentNode.previousElementSibling.value = res;
      }
    };
    qrcode.decode(reader.result);
  };
  reader.readAsDataURL(node.files[0]);
  //Passing Data
  console.log(node.files[0].name);
  var data1 = {
	  'qr_url' : node.files[0].name
  }
	  $.ajax({
		  url: "http://localhost:8080/qr_localhost/welcome/qr_add",
		  type: "POST",
		 dataType: "json",
	  		data: {"qr_url": node.files[0].name},
			// application: "application/json",
		  // processData: false,
		  success: function(data) {
			  console.log("Success");
			  console.log(data);
			  $("#pre-elem").text(JSON.stringify(data))
		  },
		  error: function(jqXHR, textStatus, errorThrown) {
			  // alert('Error get data from ajax');
			  $("#pre-elem").text(errorThrown)
			  console.log(errorThrown)
		  }
	  });
 }
