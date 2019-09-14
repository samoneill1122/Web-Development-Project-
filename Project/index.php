<?php

session_start();
/*if(isset($_SESSION['username']))
{
	$_SESSION['msg'] = "You must log in first to view this page";
	header("location: login.php");
}*/

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Project</title>
	<link rel="icon" href="">
	<link rel="stylesheet" type="text/css" href="project.css">
	<script type="text/javascript"  src="project.js"> </script>
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
	<?php
	if(isset($_SESSION['success'])) : ?>
	<div>
		<h3>
			<?php 
				echo $_SESSION['success'];
				unset($_SESSION['success']);
			?>
		</h3>
	</div>
	<?php endif ?>
	<?php if(isset($_SESSION['username'])) : ?>
		<h3 id="welcome">Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></h3>
	<?php endif ?>
	<div class="parralax">
	</div>
	<div class="container">
		<h2 class="learnDarts">Learn To Play Darts</h2>
		<p>Darts is fun, but it's even more fun when you can play it well! Ever found yourself stuck on double 1 for what seems like an eternity while your mates at the pub laugh hysterically at your expense? Of course you have, we've all been there! It's time to say bye-bye to those days now though, because here at LearnDarts.ie, we stop at nothing to make sure your darts game grows faster than you can say ONE HUNDRED AND EIGHTY!!! To begin your journey of securing bragging rights amongst your friends, click the 'get started' link below...</p>
		<button type="button" id="get_started_btn"><a href="learn.php">Get Started</a></button>
	</div>
</body>
</html>