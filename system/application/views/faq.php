<?php 
	$this->load->view('global/top');
?>

	<div id="title">FAQs</div>
	<div id="faq">
	<ol>
	<li>What is Busk.TV?<br />Busk.TV is a way for people to busk online for free.  There is only currently one virtual street corner, but there are plans to add other locations so multiple musicians can play at once.</li>
	<li>Why are you doing this?<br />This was inspired by a post by Derek Sivers, <span id="page_title"><a href="http://sivers.org/busk">Put buskers online</a></span>, that I decided to expand upon. I also wanted to learn something new by playing with the Justin.TV API.</li>
	<li>Who are you?<br />Aaron Frank - <a href="http://www.arfrank.com">http://www.arfrank.com</a></li>
	<li>Can I donate to you?<br />Right now just donate to the artists playing, but if you want to contribute code or expertise or thoughts please feel free to do so.</li>
	<li>What is this website built upon?<br />Frontend - CodeIgniter (PHP), DB - MySQL, Live Video - Justin.TV API<br />The code is all open source: <a href="http://github.com/arfrank/busk">http://github.com/arfrank/busk</a></li>
	</ol></div>

<?php 
		$this->load->view('global/bottom');
?>