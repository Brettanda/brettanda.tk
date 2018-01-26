	<h1>Contact Form</h1>
	<div class="main">
	
	<h2>Contact Me Here</h2>
	<form action="email.php" method="post">
		<label for="name">Full Name: </label>
		<input type="text" name="fullname" id="fullname" placeholder="Your Full Name" autocomplete="on"><br>
		
		<label for="email">Email: </label>
		<input type="email" name="email" required="1" id="email" placeholder="Your Email" autocomplete="on"><br>
		
		<label for="message" style="vertical-align: top;" >Message: </label>

		<textarea name="message" id="message" cols="30" rows="10" spellcheck="true" placeholder="Your message to me."></textarea><br>

		<label for="reset"></label>
		<input name="reset" type="reset">	<input type="submit">
	</form>
	