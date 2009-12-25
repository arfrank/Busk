<?php 
	$this->load->view('global/top');
?>
<br />Want a shot at the limelight?
<br />
<br />
<div id="login">
	<div id="title">Login</div>
<form>
<br>Email: <input type="text" name="email" />
<br>PW: <input type="text" name="pw" />
<br><input type="submit" value="Login" /></form>
</div>
<div id="register">
<div id="title">Register</div>
<form action="post">

<br>Email: <input type="text" name="email" />
<br>PW: <input type="text" name="pw" />
<br>PW confirm: <input type="text" name="pw_confirm" />
<input type="submit" value="Register" /></form>
</div>
<?php 
		$this->load->view('global/bottom');
?>