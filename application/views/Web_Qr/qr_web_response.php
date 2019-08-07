<div class="modal fade in" id="qr_web_success_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
		   <canvas height='1' id='confetti' width='1' style="display: none;"></canvas>
		   <canvas id="drawing_canvas"></canvas>
            <div class="modal-body" id="result">
				<div class="column-2-flex">
					<div class="column-child1-flex">
						<canvas id="myCanvas" data-completed="100" data-width="200" data-height="200" height="170"></canvas>
						  <div id="count" class="round">
							  <div class="num">15700</div>
						  </div>
						<p id="response_message" class="response_success"></p>
						<p id="response_message_body" class="response_message"></p>
						<b><p id="participant_name" class="response_message"> </p></b>
						<p id="response_message_error" class="response_success_error"></p>
						<p id="response_message_body_error" class="response_message_error"></p>
						<b><p id="participant_name_error" class="response_message_error"></p></b>
					</div>
					<div class="column-child2-flex">
						<div style = "width: 15%;padding-left: px;background-color: #D53931; height: 100%;float: right; opacity: 0.5;"> </div>
					</div>
				</div>
				<div class="success_logo_footer">
					<div class="rectangle"></div>
					<img class="sidebar_success_position_image" src="<?php echo base_url("assets/images/logo_sidebar.png")?>">
				</div>
            </div>
        </div>
    </div>
</div>
