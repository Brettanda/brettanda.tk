<?php
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "05/16/1999";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")?((date("Y") - $birthDate[2]) - 1):(date("Y") - $birthDate[2]));
?>
<?php
$pageName = "Home";
include('includes/header.php');?>
<h1 class="background">Brett Anda</h1>
	
	<div class="main">
	<h2>Good <?php 
	if($timeOfDay == "night"){
		print("night");
	}
	if($timeOfDay == "morning"){
		print("morning");
	}
	if($timeOfDay == "afternoon"){
		print("afternoon");
	}
	if($timeOfDay == "evening"){
		print("evening");
	}
		?>!</h2>
	<h2>About Me</h2>
		
	<p>I am <?php print $age;?> years of age as of May 16th, I am currently a student a <abbr title="Southern Alberta Insitute of Technology">SAIT</abbr> and I am taking the New Media Production and Design course. I am learning how to make websites in HTML, CSS, PHP, and JavaScript.</p>
	
	<p>I am a hardcore gamer and I also like to make my own game prototypes in Unreal Engine. Before Unreal Engine I used Unity 5, I stopped using Unity 5 because I found it too limiting for the prototypes that I wanted to make. In Unreal Engine, I am able to make full game prototypes and have them look the way that I want. In Unreal Engine, I have made a few prototypes to test out my ability to use lighting effects and texture reflections.</p>
	
	
	<h2 id="future">What I want to do</h2>
	<p>I am interested in making basic websites for people that are willing to pay. This page is an example of some of my work.</p>
	
	<h2 id="learned">What I have learned so far</h2>
	<p>I have learned how to do basic HTML forms like Login Pages. How to make arrays of different items. I have made this webpage to display my ability to make a webpage.</p>
	
	<h2 id="learning">What I will be able to make in the next year and a half</h2>
	<p>I will be learning how to make and use:</p>
 	<ul>
  		<li>E-Commerce Sites With HTML, PHP, CSS, and Java</li>
  		<li>DataBases with MySQL</li>
  		<li>Use a green screen in Adobe Premiere and After Effects</li>
	</ul>
	<h2>Portfolio</h2>
	<p>You can find the portfolio I made to get into this course before I started learning more about HTML, and CSS at <a href="http://motostar.tk" target="new">motostar.tk</a>.</p>
	<p>The portfolio I am making to show my progress in HTML, CSS, PHP, Photoshop, Illustrator, and Premiere will be up in the next few weeks.</p>

<?php include('includes/footer.php');?>