<?php

$username=$_POST["username"];
$password=$_POST["password"];

$con=mysql_connect("localhost","root","111452111");
mysql_select_db("sports.com");

$query=mysql_query("SELECT * FROM `users` WHERE `name` LIKE '$username' AND `password` LIKE '$password'");

$row=mysql_fetch_array($query);

$flag =1;

if ($row['name']== $username && $row['password']==$password){
    header("location: index.php");
}else{
    header("loaction: login.php");
}

mysql_close($con);
?>