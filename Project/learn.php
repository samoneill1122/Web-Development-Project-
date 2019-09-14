<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Learn</title>
	<link rel="stylesheet" type="text/css" href="project.css">
	<script type="text/javascript"  src="project.js"> </script>
	<link rel="prefetch" href="dartsBoard2.jpg">
	<link rel="prefetch" href="501.jpg">
	<link rel="prefetch" href="scoring.jpg">
</head>
<body>
	<a name="top"></a>
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
		<p>Goto: <ul><a href="#rules"><li>Rules </li></a><a href="#strategy"><li>Strategy</li></a></ul></p>
		<a name="rules"></a>
		<h2 class="sub-heading" id="rules">Rules</h2>
		<div id=seperator></div>
		<p>The following rules apply to a simple game of 501, your standard game of darts:</p>
		<h3>The board</h3>
		<img src="dartsBoard2.jpg" id="dartsBoard" class="textWrap" />
		<p>The board consists of the numbers 1-20, the the outer bull, and the inner bull. The outer green and red sections of the numbers represent doubles, e.g. double 20 is worth 40 points. The inner green and red sections represent trebles, e.g. treble 20 is worth 60 points. The outer bull is worth 25 points and the inner bull is worth 50 points.</p>
		<div style="padding-top: 10px">
			<h3>The game of 501</h3>
			<img src="501.jpg" class="textWrap" id="five-oh-one">
			<p>The game of 501 is simple. Both players start off with a score of 501 points, with the aim of the game being to get down to 0 points. The first player to do so wins. This is done by scoring as highly as one possibly can and then subtracting that score from the players overall score. However, in order to finish on 0 points, one must do so by landing their last dart on a double. For instance, if I had 40 points left, I might choose to go for double 20. This can also be done by landing on bulls-eye (if you have 50 points left). If you are trying to finish on a double and you hit a segment that is higher than the value of the double, you become 'bust'. This means that your score resets to what it was at the start of your last turn.</p>
		</div>
		<a name="strategy"></a>
		<h2 class="sub-heading" id="strategy">Strategy</h2>
		<div id=seperator></div>
		<p class="p">The strategy a player implements while playing Darts largely depends on the skill level of said player. However, this website is aimed towards beginner Darts players and so will focus on the best strategies to use if you are a beginner:</p>
		<h3>Scoring</h3>
		<img src="scoring.jpg" class="textWrap" id="scoring" onmouseover="changeOpacity()" onmouseout="resetOpacity()" />
		<p class="p">Aiming for the left hand side of the board is always a good idea when you're a beginner. The 14-11-8-16 segments will allow you to score consistently high. When your accuracy improves enough, you should aim for the 20 and 19 segments, as they will yield you the highest scores and get you down to the finishing zone as quickly as possible.</p>
		<h3>Finishing</h3>
		<p class="p">When a player gets to just outside the finishing zone (within 170 points left) he/she should begin to think about where they should aim in order to give themselves the easiest possible finish. It is always a good idea to leave yourself on 32 points if possible, as this leaves you double 16 to finish. This is the most popular double because if you miss and hit 16, it leaves double 8, which leaves double 4, double 2 and double 1 if you keep missing. In other words, it provides you with the most amount of chances to finish.</p>
		<p><a href="#top">Return</a></p>
	</div>
</body>
</html>