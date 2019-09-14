<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>About Us</title>
	<link rel="stylesheet" type="text/css" href="project.css">
	<script type="text/javascript"  src="project.js"> </script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
	<header id="header">
		<div class="headerContainer">
			<h1>LearnDarts.ie</h1>
			<nav> 
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="learn.php">Rules/Strategy</a></li>
					<li><a href="about_us.php">About Us</a></li>
					<?php if(isset($_SESSION['username'])) : ?>
						<li><a href="logout.php">Logout</a></li>
					<?php endif ?>
					<?php if(!(isset($_SESSION['username']))) : ?>
						<li><a href="sign_up.php">Sign up/Login</a></li>
					<?php endif ?>
					<li><a href="quiz.php">Quiz</a></li> 
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<h3 id="myHeader" alt="Me, myself and I!">Sam O'Neill</h3>
		<img src="mise.png" id="mise" class="textWrapLeft"/>
		<p style="font-size: 107%;">My name is Sam O'Neill and I am the founder of this website. I have always had an interest in darts and it remains to this day my all-time favourite pub game. I began playing darts when I was 16 years of age, taking inspiration from Darts legends such as Gary Anderson, Phil Taylor and Michael Van Gerwen. I love darts because it is a simple game and contrary to popular belief, anyone can become good at it. Also, I love how there's far more to the game than meets the eye at first; everything from scoring strategy to the weight of the darts can play a massive part in the outcome of the game. </p>
	</div>
	<div class="contact_links">
		<ul>
			<li><a href="https://www.facebook.com/profile.php?id=100008895510685"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<li><a href="https://github.com/samoneill1122"><i class="fa fa-github" aria-hidden="true"></i></a></li>
			<li><a href="https://www.linkedin.com/in/sam-o-neill-203447172/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			<li><a href="https://www.instagram.com/sam_oneill1122/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		</ul>
	</div>
</body>
</html>