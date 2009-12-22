<?php 
	$this->load->view('global/top');
?>
<div id="title">Currently Busking:</div>
<div id="busk_video">
<object type="application/x-shockwave-flash" height="300" width="400" id="live_embed_player_flash" data="http://www.justin.tv/widgets/live_embed_player.swf?channel=busktv" bgcolor="#000000"><param name="allowFullScreen" value="true" /><param name="allowScriptAccess" value="always" /><param name="allowNetworking" value="all" /><param name="movie" value="http://www.justin.tv/widgets/live_embed_player.swf" /><param name="flashvars" value="channel=busktv&auto_play=true&start_volume=25&enable_javascript=true" /></object>
</div>
<div id="info">
<span>Busker:</span><span id="busker_name"></span></div>

<div id="donate">Donate to this busker:<br /><img title="0.50" alt="0.50" src="img/icon/50cent.jpg"><img alt="$1" src="img/icon/1dollar.jpg"><img alt="$2" src="img/icon/2dollar.jpg"><img alt="$5" src="img/icon/5dollar.jpg">Other</div>
<?php
	$this->load->view('global/bottom');
?>