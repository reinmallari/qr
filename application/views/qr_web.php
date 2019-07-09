<!DOCTYPE html>
<html>
<head>
	<title>For Web</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/qr_web_css.css')?>">
</head>
<body>
    <div id="app">
      <div class="sidebar">
        <section class="cameras">
          <h2>Cameras</h2>
          <ul>
            <li>
              <span id="camera_name" class="active"></span>
            </li>
          </ul>
        </section>
        <section class="scans">
          <h2>Scans</h2>
          <ul>
            <li class="empty">No scans yet</li>
          </ul>
		<ul class="qr_content_list">
	  	</ul>
	   </section>
      </div>
      <div class="preview-container">
        <video id="preview"></video>
      </div>
    </div>
    <script src="<?php echo base_url('assets/lib/qr_lib_web.js')?>"></script>
    <script src="<?php echo base_url('assets/lib/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/scripts/qr_web.js')?>"></script>
    <script type="text/javascript">
		var base_url = '<?php echo base_url(); ?>';
	</script>
</body>
</html>
