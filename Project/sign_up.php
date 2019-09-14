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
		<p>Already a user? Log in <a href="login.php">here</a></p>
		<form action="sign_up.php" method="post" style="border:1px solid #ccc">
        <div style="padding-left: 15px;">
        	<?php include('errors.php') ?>
        </div>
    	<div class="form_container">
   			<h1>Sign Up</h1>
    		<p>Please fill in this form to create an account with LearnDarts.ie.</p>
    		<hr>
    		<label for="username"><b>Username</b></label>
    		<input type="text" name="username" placeholder="Enter Username" required>
			<label for="email"><b>Email</b></label>
    		<input type="text" name="email" placeholder="Enter Email" required>
			<label for="psw"><b>Password</b></label>
    		<input type="password" name="psw" placeholder="Enter Password" required>
			<label for="psw-repeat"><b>Repeat Password</b></label>
    		<input type="password" name="psw-repeat" placeholder="Repeat Password" required>
			<div class="clearfix">
      			<button type="submit" class="wide_button" name="reg_user">Sign Up</button>
    		</div>
		</div>
		</form>
	</div>
</body>
</html>