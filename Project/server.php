<?php

session_start();

$username = "";
$email = "";

$errors = array();

// Connect to db
$db = mysqli_connect('localhost', 'id9415052_root', 'bouncer2', 'id9415052_user_reg') or die("Could not connect");

$username='';$email='';$psw_1='';$psw_2='';
// Register users
if(isset($_POST['username'])){$username = mysqli_real_escape_string($db, $_POST['username']);}
if(isset($_POST['email'])){$email = mysqli_real_escape_string($db, $_POST['email']);}
if(isset($_POST['psw'])){$psw_1 = mysqli_real_escape_string($db, $_POST['psw']);}
if(isset($_POST['psw-repeat'])){$psw_2 = mysqli_real_escape_string($db, $_POST['psw-repeat']);}
// Form validation
if(empty($username)) {array_push($errors, "Username is required");}
if(!(isset($_POST['login_user']))) 
{
	if(empty($email)) {array_push($errors, "Email is required");}
	if(empty($psw_1)) {array_push($errors, "Password is required");} 
	if($psw_1 != $psw_2) {array_push($errors, "Passwords do not match");} 
}

// Check db for existing users with username/email
$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if($user)
{
	if(!(isset($_POST['login_user'])))
	{
		if($user['username'] === $username) {array_push($errors, "Username is already taken");}
		if($user['email'] === $email) {array_push($errors, "This email already has a registered username");}
	}
}

// Register user if no errors occur
if(count($errors) == 0)
{
	$password = md5($psw_1); // Encrypts password
	$query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
	mysqli_query($db, $query);
	$_SESSION['username'] = $username;
	//$_SESSION['success'] = "You are now logged in";
	header("location: index.php");
}

// Login
if(isset($_POST['login_user']))
{
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	echo "$username";echo "$password";

	if(empty($username)){array_push($errors, "Username is required");}
	if(empty($password)){array_push($errors, "Password is required");}

	if(count($errors) == 0)
	{
		$password = md5($password);
		$query = "SELECT * FROM user WHERE username='$username' AND email='$email'";
		$results = mysqli_query($db, $query);	

		if(mysqli_num_rows($results))
		{
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged in successfully";
			header('location: index.php');
		}
		else
		{
			array_push($errors, "Wrong username/password combination. Please try again.");
		}
	}
	foreach ($errors as $error) {
		echo "$error";
	}
}

?>