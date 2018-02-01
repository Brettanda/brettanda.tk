<footer>
<?php 
if(date('Y')==2017){
	$copyrightDate = date('Y');
}else if (date('Y')>2017){
	$copyrightDate = "2017 - ".date('Y');
}
?>
<address>
Written by Brett Anda.<br>
</address>
<p>&copy; Copyright <?php print($copyrightDate);?> Brett Anda. All Rights Reserved.</p>
<a target="_new" href="contact.php">Contact Me</a>
<p>My Social Media</p>
<a target="new" href="https://facebook.com/brettanda"><img src="images/SocialMedia/fblogo.png" alt="FB Logo"></a>
<a target="new" href="https://instagram.com"><img src="images/SocialMedia/ig.png" alt="Instagram Logo"></a>
<a target="new" href="https://twitter.com"><img src="images/SocialMedia/twitter.png" alt="Twitter Logo"></a>
<a target="new" href="https://www.youtube.com/user/motostar12"><img src="images/SocialMedia/youtubeLogo.png" alt=" Logo"></a>
<!--<a target="new" href="https://"><img src="images/SocialMedia/" alt=" Logo"></a>
<a target="new" href="https://"><img src="images/SocialMedia/" alt=" Logo"></a>-->
</footer>
</div>
</main>
</body>
</html>