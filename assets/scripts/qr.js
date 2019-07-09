window.onload = function () {
	var hasTouchscreen = 'ontouchstart' in window;
	if(hasTouchscreen){
		$.ajax({
			success: function(data) {
				alert("mobile to" + base_url);
				window.location.href = base_url +"welcome/";
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert("error");
			}
		});
	}else{
		$.ajax({
			success: function(data) {
				alert("sa web e" + base_url);
				window.location.href = base_url +"welcome/indexWeb";
			},
			error: function(jqXHR, textStatus, errorThrown) {
				alert("error");
			}
		});
	}
}
//Start For mobile
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
		  success: function(data) {
			  console.log("Success");
			  $("#pre-elem").text(JSON.stringify(data))
		  },
		  error: function(jqXHR, textStatus, errorThrown) {
			  alert(jqXHR);
			  $("#pre-elem").text(JSON.stringify(textStatus))
			  console.log(errorThrown)
		  }
	  });
 }
 //End For mobile
