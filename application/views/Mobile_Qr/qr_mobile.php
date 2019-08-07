
	<form>
		<input type=text size=16 id="qrcode_text"  name="qrcode_text" placeholder="Tracking Code" class=qrcode-text>
		<label class=qrcode-text-btn><input type=file accept="image/*" capture=environment onchange="openQRCamera(this);" tabindex=-1></label>
		<input type=button value="Go" disabled>
	</form>

	<pre id="pre-elem">

	</pre>
