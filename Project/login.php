<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<title>Sign Up/Log In</title>
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
					<li><a href="sign_up.php">Sign Up/Log In</a></li> 
					<li><a href="quiz.php">Quiz</a></li> 
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<p>Not already registered? Sign up <a href="sign_up.php">here</a></p>
		<form action="login.php" method="post" style="border:1px solid #ccc">
    	<div class="form_container">
   			<h1>Log In</h1>
    		<hr>
    		<label for="username"><b>Username</b></label>
    		<input type="text" placeholder="Enter Username" name="username" required>
			<label for="psw"><b>Password</b></label>
    		<input type="password" placeholder="Enter Password" name="password" required>
			<div class="clearfix">
      			<button type="submit" class="signupbtn" name="login_user">Log In</button>
    		</div>
		</div>
		</form>
	</div>
</body>
</html>