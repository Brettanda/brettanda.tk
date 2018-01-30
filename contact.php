<?php
$pageName = "Contact Me";
include('includes/header.php'); ?>
	<h1>Contact Form</h1>
	<div class="main">
	
	<h2>Contact Me Here</h2>
	<form action="email.php" method="post">
		<h3>This form has not been implemented yet.</h3>
		<label for="name">Full Name: </label>
		<input disabled type="text" name="fullname" id="fullname" placeholder="Your Full Name" required autocomplete="on"><br>
		
		<label for="email">Email: </label>
		<input disabled type="email" name="email" id="email" placeholder="Your Email" required autocomplete="on"><br>
		
		<label for="message" style="vertical-align: top;" >Message: </label>

		<textarea disabled name="message" id="message" cols="30" rows="10" spellcheck="true" required placeholder="Your message here."></textarea><br>

		<label for="reset"></label>
		<input name="reset" type="reset">	<input disabled type="submit">
	</form>
	

<?php include('includes/footer.php');?>