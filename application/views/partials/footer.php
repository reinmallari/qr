<script src="<?php echo base_url('assets/lib/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap.min.js')?>"></script>
<?php if (isset($qr_lib_web) && $qr_lib_web) echo '<script src="'. base_url('assets/lib/qr_lib_web.js') .'"></script>'; ?>
<?php if (isset($qr_web_js) && $qr_web_js) echo '<script src="'. base_url('assets/scripts/qr_web.js') .'"></script>'; ?>
<?php if (isset($qr_lib_mobile) && $qr_lib_mobile) echo '<script src="'. base_url('assets/lib/qr_lib_mobile.js') .'"></script>'; ?>
<?php if (isset($qr_mobile_js) && $qr_mobile_js) echo '<script src="'. base_url('assets/scripts/qr_mobile.js') .'"></script>'; ?>
<script src="<?php echo base_url('assets/lib/animate.js')?>"></script>
<script type="text/javascript">
	 var base_url = '<?php echo base_url(); ?>';
	 var user = '<?php echo $this->ion_auth->user()->row()->id?>';
 </script>
</body>
</html>
