<?php
echo "<style type='text/css'>"; 
include'style.css';
echo "</style>";
?>
<?php

if(isset($_POST['submit'])) 
{  
$id=$_POST['id'];
$title=$_POST['title'];
$post=$_POST['post'];
$catgory=$_POST['category'];
$image=$_POST['image'];

$con2=mysql_connect("localhost","root","128youssuf1997");
mysql_select_db("sports.com");
 $query=mysql_query("UPDATE `news` SET `post` = '$post' WHERE `news`.`id` ='$id' ");
 $query=mysql_query("UPDATE `news` SET `title` = '$title' WHERE `news`.`id` ='$id' ");
 $query=mysql_query("UPDATE `news` SET `category` = '$catgory' WHERE `news`.`id` ='$id' ");
 $query=mysql_query("UPDATE `news` SET `image` = '$image' WHERE `news`.`id` ='$id'");
 if ($query)
 {
 }
 else
 {
 echo "not inserted";
 }
 mysql_close($con2);
}
/*UPDATE `news` SET `post` = 'post' WHERE `news`.`id` = 1 */
?>
<div class="outdiv">
<div class="editform">
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<?php
$id=1;
$con=mysql_connect("localhost","root","128youssuf1997");
mysql_select_db("sports.com");
 $query=mysql_query("SELECT * FROM `news` WHERE `id` = '$id' ");
 $row=mysql_fetch_array($query);
 
 echo 'title : <textarea name="id"  rows="1" cols="61">';
 echo  $id;
 echo '</textarea><br>';
 echo 'title : <textarea name="title"  rows="1" cols="61">';
 echo  $row["title"];
 echo '</textarea><br>';
 echo 'title : <textarea name="post"  rows="20" cols="61">';
 echo  $row["post"];
 echo '</textarea><br>';
 echo 'select category : <br><select name="category"  type="select">';
 $query=mysql_query("SELECT * FROM `category`");
 while($row2=mysql_fetch_array($query))
 {
 echo "<option> ";
 echo $row2["name"];
 echo "<br>";
 }
 echo '</select><br>';
 echo'image ';
 echo'<textarea name="image"  rows="1" cols="61">';
 echo  $row["image"];
 echo '</textarea><br>';
 mysql_close($con);
?>
<input type="submit" name="submit" value="Submit Form"><br>
</form>
</div>
</div>
