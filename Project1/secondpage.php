<?php 
	session_start();
	$user=$_SESSION['userr'];
?>
<!DOCTYPE html>
<html>
<head lang="en-US">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-cale=1">
	<title>My Page</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>

</head>
<body id="body2">
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#about">About me</a></li>
		<li><a href="#contact">Contact</a></li>
		<li class="welcome1"><a href="index.php">Log out</a></li>
		<li class="welcome"><?php echo "You are logged in as: ".$user;?></li>
	</ul>
	<nav id="nombre">
		<h2 id="h2sp">Tudor Popa</h2>
	</nav>
	<main id="about">
		<h1>Description</h1>
		
		<p>Hello my name is Tudor Popa, it's a nice pleasure to have you here on my webpage.</p>
		<p>I am a Computer science graduate and I am currently working on my web development skills.
			<br/> My desire is to get enough experience to be able to work as freelancer
			<br/> and in this way I could live in different places on earth. </p>
		<p>If you want to check me out you can do it here:</p>
		<div class="wrap">
			<p>GitHub Repositories: <a href="https://github.com/Twodor21?tab=repositories" target="_blank">https://github.com/Twodor21?tab=repositories</a></p>
			<p>My first website: <a href="http://www.tudorpopa.dx.am" target="_blank">http://www.tudorpopa.dx.am</a></p>
			<p>Facebook: <a href="https://www.facebook.com/popa.tudor.21" target="_blank">www.facebook.com/popa.tudor.21</a></p>
		</div>
	</main>
	<section id="contact">
		<h1>Contact</h1>
		<div class="wrap2">
			<a href="mailto:tudorpopa92@gmail.com">E-mail: tudorpopa92@gmail.com</a>
			<br/><a href="https://www.facebook.com/popa.tudor.21" target="_blank">Facebook: Tudor Popa</a>
			<br/><a href="#contact">Phone: +40 746 032 xxx</a>
		</div>
	</section>
	<footer>&copy;2020 - Tudor Popa</footer>
</body>
</html>