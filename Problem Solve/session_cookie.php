<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Session Cookie</title>
</head>
<body>
<?php 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (isset($_POST["login"])) {
//   	$_SESSION["name"] = $_POST["name"];
// 	$_SESSION["pass"] = $_POST["password"];
// 	print_r($_SESSION);
//   }elseif (isset($_POST["logout"])) {
//   	session_destroy();
//   	print_r($_SESSION);
//   }
// }
//echo "Name = ".$name."<br>";
//echo "Password = ".$pass."<br>";
?>
<?php
$cookie_name = $_POST["name"];
$cookie_value = $_POST["password"];
setcookie($cookie_name, $cookie_value, time() + (10 * 1), "/");
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
	<h2>PHP Session Cookie Example</h2>
	<form method="post" action="">  
	  Name: <input type="text" name="name">
	  <br><br> 
	  Password: <input type="Password" name="password">
	  <br><br>
	  <input type="submit" name="login" value="login">  
	  <input type="submit" name="logout" value="logout">  
	</form>
	<a href="Problem_1.php?id=2">problem</a>

</body>
</html>
