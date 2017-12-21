<?php

$game_name=$_POST["game_name"];
$game_type=$_POST["game_type"];
$game_price=$_POST["game_price"];

$con=mysql_connect("localhost","root","123");

mysql_select_db("games_db");

$query=mysql_query("insert into games_tables (name,type,price)
 values ('$game_name','$game_type',$game_price)");

if ($query)
{
	header("Location: select_all.php");
}
else
{
echo "not inserted";
}

mysql_close($con);

?>
