<!DOCTYPE html>
<html>
<head>
	<title>ePerformax Qr Reader</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<?php if (isset($qr_web) && $qr_web) echo '<link rel="stylesheet" href="'. base_url('assets/css/qr_web_css.css') .'">' ?>
	<?php if (isset($qr_mobile) && $qr_mobile) echo '<link rel="stylesheet" href="'. base_url('assets/css/qr_mobile_css.css') .'">' ?>
</head>
<body>
