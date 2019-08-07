<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css')?>">
</head>
	<body>
		<div class="bg-web-img-login">
			<div class="darken-overlay">
			  <div>
				  <?php echo form_open('auth/login', array('class' => 'container_login_web_form', 'id'=>'sample')); ?>
				       <div style = "width: auto;padding-left: 115px;background-color: #D53931; position: fixed;margin-top: -80px; margin-left: -131px;opacity: 0.6;"> </div>
					  <img class="login_title_size" src = "<?echo base_url('assets/images/login_title.png')?>"/>
					  <p class="login_title_here">Login here</p>
					  <input type="text" placeholder="Username" name="username" required>
					  <input type="password" placeholder="Password" name="password" required>
					  <button type="submit" class="btn_web_login_submit">Continue</button>
					  <p class="login_footer">ePLife Registration Communicator © 2019, ePerformax Contact Centers & BPO</p>
				<?php echo form_close(); ?>
			  </div>
			</div>
		</div>
	</body>
</html>
