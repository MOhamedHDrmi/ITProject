<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];

$con=mysql_connect("localhost","root","111452111");
mysql_select_db("sports.com");

$query=mysql_query("SELECT * FROM `users` WHERE `name` LIKE '$username' AND `password` LIKE '$password'");

$row=mysql_fetch_array($query);

$flag =1;

if ($row['name']== $username && $row['password']==$password){
    $id=$row['id'];
    $_SESSION["id"] = $id;
    header("location: index.php");
}else{
    header("loaction: login.php");
}
/*session_unset(); 

// destroy the session 
session_destroy(); */ 
mysql_close($con);
?>