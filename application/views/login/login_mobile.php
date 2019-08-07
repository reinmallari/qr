<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login_mobile.css')?>">
</head>
	<body>
		<div class="bg-mobile-img-login">
			<div class="overly_mobile">
				<div class="rectangle_mobile"></div>
				<div class="logo"><img class="login_title_size_mobile" src = "<?echo base_url('assets/images/logo_sidebar.png')?>"/>...</div>
				<?php echo form_open('auth/login', array('class' => 'container_login_mobile_form', 'id'=>'sample')); ?>
				<div class="center_mobile_login_form">
					<input class="font_color_input" type="text" placeholder="Username" name="username" required>
					<input class="font_color_input" type="password" placeholder="Password" name="password" required>
					<button type="submit" class="btn_web_login_submit">Continue</button>
				</div>
				<div class="logged_footer_mobile">
					<p class="footer_size_mobile">ePLife Registration Communicator © 2019, ePerformax Contact Centers & BPO</p>
				</div>
			   <?php echo form_close(); ?>
			</div>
		</div>
	</body>
</html>
