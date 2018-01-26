<?php
	$emailRecipient = "brett.anda@edu.sait.ca";
	$subject = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
<?php
	if(@mail($emailRecipient, $subject, $message, $headers))
{
  echo "Email Sent!";
}else{
  echo "Email Failed!";
}
?> | Brett Anda</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	@import url('https://fonts.googleapis.com/css?family=Bungee|Montserrat:300,400,600');
	* {
		box-sizing: border-box;
	}
	body{
		font-family: 'Montserrat', sans-serif;
		background-image: url(images/BackgroundHex.png);
		background-size: 10%;
		/*background: #940300;*/
	}
	main{
		margin: 0 auto;
		text-align: center;
		padding: 20%;
	}
</style>
</head>
<body>
<main>
	<h1><?php
	if(@mail($emailRecipient, $subject, $message, $headers))
{
  echo "Email Sent!";
}else{
  echo "Email Failed!";
}
?></h1>
</main>
</body>
</html>