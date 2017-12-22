<?php
echo "<style type='text/css'>"; 
include'style.css';
echo "</style>";

$con=mysql_connect("localhost","root","italia01144152537");
$title;
mysql_select_db("sports.com");
$query;
if(isset($_POST["Home"]))
{
    echo "Home";
    $query=mysql_query("SELECT `title`, `image-source` FROM `news`");
}else
{
    echo "la Liga";
    $title=$_POST['La_Liga'];
    $query=mysql_query("SELECT `title`, `image-source` FROM `news` WHERE category='$title'");
}
?>

<div class="outdiv">
    <div name="head">
        <img src="images\\signup.png" >
    </div>
    <div name="menu">
        <form action="index.php" name="menuform" method="POST" class="menuform">
            <input type="submit" name="Home" value="Home">
            <input type="submit" name="La_Liga" value="La Liga">
        </form>
    </div>
    <?php
    echo "<div class='homebody'>";
    echo "<table name='titles'";
    while($row=mysql_fetch_array($query)){
        echo "<tr class='bottomborder'>
        <td><img src='$row[1]' width=200px height=200px></td>
        <td><a href='' name='$row[0]'>".$row[0]."</a></td>
        </tr>";
    }
    echo '</ul>';
    echo "</div>";
    ?>
    </div>
</div>
