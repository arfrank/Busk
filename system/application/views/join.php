<?php 
	$this->load->view('global/top');
?>
<br />Want a shot at the limelight?<br /><br />
<div id="login">
	<div id="title">Login</div>
<form name="login" action="/login" method="post">
<table id="tblogin">
<tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
<tr><td>PW:</td><td><input type="password" name="lpw" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Login" /></td></tr></table></form>
</div>
<div id="register">
<div id="title">Register</div>
<form name="register" action="/register" method="post">
<table id="tbregister">
<tr><td>Email:</td><td><input type="text" name="email" /></td></tr>
<tr><td>PW:</td><td><input type="password" name="rpw" /></td></tr>
<tr><td>PW (again):</td><td><input type="password" name="rpw_confirm" /></td></tr>
<tr><td colspan="2"><input type="submit" value="Login" /></td></tr></table></form>
</div>
<div class="clearer"></div>
<script type="text/javascript">
function obfuscate($pw){
	
}

$(document).ready(function(){
	$('form').submit(function(){
		$.each($('input:password'),function(x,y){
			
		});
	});
});
</script>
<?php 
		$this->load->view('global/bottom');
?>