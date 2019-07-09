<!DOCTYPE html>
<html>
<head>
	<title>For Web</title>
	<script src="<?php echo base_url('assets/lib/qr_lib_web.js')?>"></script>
	<script src="<?php echo base_url('assets/lib/jquery.min.js')?>"></script>
</head>
<body>
    <h1>For web</h1>
    <video id="preview"></video>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        alert(content);
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
    <script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
	</script>
</body>
</html>
