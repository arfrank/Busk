<html>
<head>
	<title>Busk.TV - <?php echo $title; ?></title>
	<link rel="stylesheet" href="/master.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<script src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.3.2");
	</script>
</head>
<body>
<div id="bg">
<div id="top_bar">
<a href="/"><li>Home</li></a>
<?php if($this->session->userdata('user_id')) { ?>
<a href="/play"><li>Play</li></a>
<?php } ?>
<a href="/faq"><li>FAQ</li></a>
<?php if(! $this->session->userdata('user_id')) { ?>
	<a href="/join"><li>Register/Login</li></a>
<?php }else{ ?>
<a href="/logout"><li>Logout</li></a>
<?php } ?>
</div>
<div id="content">