<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/qr_css.css')?>">
	<script src="<?php echo base_url('assets/lib/qr_lib.js')?>"></script>
	<script src="<?php echo base_url('assets/scripts/qr.js')?>"></script>
	<script src="<?php echo base_url('assets/lib/jquery.min.js')?>"></script>
</head>
<body>
	<form>
		<input type=text size=16 id="qrcode_text"  name="qrcode_text" placeholder="Tracking Code" class=qrcode-text>
		<label class=qrcode-text-btn><input type=file accept="image/*" capture=environment onchange="openQRCamera(this);" tabindex=-1></label>
		<input type=button value="Go" disabled>
	</form>

	<pre id="pre-elem">

	</pre>
</body>
</html>
