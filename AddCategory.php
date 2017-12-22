<?php

$category_name=$_POST["category_name"];


$con=mysql_connect("localhost","root","");

mysql_select_db("sports.com");

$query=mysql_query("insert into category (name) values ('$category_name')");

if ($query)
{
	header("Location: index.php");
}
else
{
echo "not inserted";
}

mysql_close($con);

?>