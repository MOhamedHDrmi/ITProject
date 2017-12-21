<?php


$id2=$_POST["id2"];
$news_title=$_POST["news_title"];
$news_desc=$_POST["news_desc"];
$con=mysql_connect("localhost","root","123");

mysql_select_db("news_db");


$query=mysql_query("update news set news_title='$news_title', news_details='$news_desc'
where news_id=$id2");

if ($query)
{
	header("Location: select_all.php");
}
else
{
echo "not updated";
}

mysql_close($con);

?>
