<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Quiz</title>
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
	<div class="container">
		<h2 style="text-align: center;">Take this quiz to find out what darts player you are!</h2>
		<h3 id="result">Not yet attempted</h3>
		<div class="quizContainer">
			<form id="quiz" name="quiz" onsubmit="return onSubmit()">
			<div class="question">
				<h3>Question 1</h3>
				<p>What weight darts do you use?</p>
				23g <input id="qbtn" type="radio" name="q1" value="mvg" checked="true">
				26g <input id="qbtn" type="radio" name="q1" value="pt">
				25g <input id="qbtn" type="radio" name="q1" value="rvb">
			</div>
			<div class="question">
				<h3>Question 2</h3>
				<p>What is your walk on song?</p>
				"I've Got The Power" <input id="qbtn" type="radio" name="q2" value="pt" checked="true"> 
				"Seven Nation Army" <input id="qbtn" type="radio" name="q2" value="mvg">
				"Eye Of The Tiger" <input id="qbtn" type="radio" name="q2" value="rvb">
			</div>
			<div class="question">
				<h3>Question 3</h3>
				<p>Which personality type describes you best when you play?</p>
				Relaxed <input id="qbtn" type="radio" name="q3" value="rvb" checked="true">
				Focused <input id="qbtn" type="radio" name="q3" value="pt">
				Serious <input id="qbtn" type="radio" name="q3" value="mvg">
			</div>
			<div class="question">
				<h3>Question 4</h3>
				<p>How do you celebrate a win?</p>
				You don't really celebrate, winning is boring at this stage <input id="qbtn" type="radio" name="q4" value="pt" checked="true"> <br>
				By going absolutely mental <input id="qbtn" type="radio" name="q4" value="mvg"> <br>
				By roaring underwhelmingly <input id="qbtn" type="radio" name="q4" value="rvb">
			</div>
			<div class="question">				
				<h3>Question 5</h3>
				<p>What best describes your appearance?</p>
				Your head is brighter than my future <input id="qbtn" type="radio" name="q5" value="mvg" checked="true"> <br>
				You're old bit still somehow a bit baby-faced <input id="qbtn" type="radio" name="q5" value="pt"> <br>
				Completely expressionless <input id="qbtn" type="radio" name="q5" value="rvb"> <br>
			</div>
			<button type="submit">Submit</button>
			<button type="button" onclick="reload()" style="background-color: #E10C08;">Reset</button>
			</form>
		</div>
	</div>
</body>
</html>