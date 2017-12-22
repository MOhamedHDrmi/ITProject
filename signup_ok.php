<?php

$username=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$phone=$_POST["phonenumber"];

$con=mysql_connect("localhost","root","111452111");
mysql_select_db("sports.com");

$query=mysql_query("INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone-number`, `type`) 
VALUES (NULL, '$username', '$email', '$password', '$phone', 'admin')");

if ($query)
{
	header("Location: login.php");
}
else
{
    echo "not inserted<br>";
}

mysql_close($con);

?>
