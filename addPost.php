<?php
echo "<style type='text/css'>"; 
include'style.css';
echo "</style>";
?>
<?php
if(isset($_POST['submit'])) 
{  
$title=$_POST['title'];
$post=$_POST['post'];
$catgory=$_POST['category'];
$image=$_POST['image'];

$con=mysql_connect("localhost","root","italia01144152537");
mysql_select_db("sports.com");
 $query=mysql_query("INSERT INTO `news` (`id`, `title`, `category`, `post`, `image`) 
 VALUES (NULL, '$title', '$catgory', '$post', '$image')");
 
 if ($query)
 {
    /*ay action*/ 
 }
 else
 {
 echo "not inserted";
 }
 mysql_close($con);
}
?>
<div class="outdiv">
<div class="editform">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
title :<input name="title" type="text" ><br>
post :-<br>
<textarea name="post"  rows="20" cols="61"></textarea><br>
<?php
$con2=mysql_connect("localhost","root","italia01144152537");
mysql_select_db("sports.com");
$query=mysql_query("SELECT * FROM `category`");
while($row2=mysql_fetch_array($query))
{
echo "<option> ";
echo $row2["name"];
echo "<br>";
}
mysql_close($con2);
?>
image :<input name="image" type="text" ><br>
<input type="submit" name="submit" value="Submit Form"><br>
</form>
</div>
</div>
