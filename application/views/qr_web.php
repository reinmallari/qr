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
            <li v-if="cameras.length === 0" class="empty">No cameras found</li>
            <li v-for="camera in cameras">
              <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
              <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
              </span>
            </li>
          </ul>
        </section>
        <section class="scans">
          <h2>Scans</h2>
          <ul v-if="scans.length === 0">
            <li class="empty">No scans yet</li>
          </ul>
          <transition-group name="scans" tag="ul">
            <li v-for="scan in scans" :key="scan.date" :title="scan.content">{{ scan.content }}</li>
          </transition-group>
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
