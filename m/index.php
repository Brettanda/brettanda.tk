<?php
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "05/16/1999";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
	? ((date("Y") - $birthDate[2]) - 1)
	: (date("Y") - $birthDate[2]));
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="styles.css">
	</head>
	<body>
	<main><input type="checkbox" id="menuToggle">
	<label for="menuToggle" class="menu-Icon">&#9776;</label>
<div class="menu">
<ul>
	<li><a href="" id="close">Close</a></li>

	<li><a href="index.php">Home</a></li>

	<li><a href="contact.php">Contact</a></li>
	</ul>
</div>
<?php
include('../includes/about.php');
include('../includes/footer.php')?>

</main>
</body>
</html>