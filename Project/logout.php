<?php
session_start();

if(isset($_SESSION['username']))
{
	session_destroy();
	echo "<script>location.href='index.php'</script>";
}

?>