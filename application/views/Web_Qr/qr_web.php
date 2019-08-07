
    <div id="app">
      <div class="sidebar">
          <span class="welcome">Welcome!</span>
		<span class="after_welcome">Please scan</span>
		<span class="after_welcome">your ePLife</span>
		<span class="after_welcome">QR code</span>
		<div class="logo_parent">
			<a href="<?php echo base_url('auth/logout')?>"><img class="sidebar_position_logo" src="<?php echo base_url("assets/images/logo_sidebar.png")?>"></a>
		</div>
      </div>
	 <img class="sidebar_position_image" src="<?php echo base_url("assets/images/sidebar_bg.png")?>">
      <div class="preview-container">
        <video id="preview"></video>
      </div>
    </div>
