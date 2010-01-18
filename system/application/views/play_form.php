<?php 
	$this->load->view('global/top');
?>
<h2>Please enter a little information about yourself before you go on.</h2>
<?php echo validation_errors(); ?>
<form name="play_info" action="/play" method="post">
<table id="play_form">
<tr><td class="label"><label for="Name">Stage Name:</label></td><td><input type="text" name="name" value="<?php echo set_value('name'); ?>"></td></tr>
<tr><td class="label"><label for="Name">Paypal Email:</label></td><td><input type="text" name="paypal_email" value="<?php echo set_value('paypal_email'); ?>"></td></tr>
<tr><td class="label"><label for="Name">Your Website:</label></td><td><input type="text" name="website" value="<?php echo set_value('website'); ?>"></td></tr>
</table>
<input type="hidden" name="stream_key" value="<?php echo $stream_key; ?>" />
<input type="submit" name="submit" value="Broadcast" />
</form><?php 
	$this->load->view('global/bottom');
?>