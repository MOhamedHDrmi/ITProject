<?php
session_start();
echo "<style type='text/css'>"; 
include'style.css';
echo "</style>";

$categories=array();
$categories_nospace=array();
$con=mysql_connect("localhost","root","italia01144152537");
mysql_select_db("sports.com");
$query=mysql_query("SELECT * FROM `category`");
while($row=mysql_fetch_array($query)){
    $categories[]=$row[0];
    $categories_nospace[]=str_replace(" ","",$row[0]);
}
if(!(isset($_SESSION["id"]))){
    header("location: login.php");
}
?>

<div class="outdiv">
    <div name="head">
        <img src="images\\signup.png" >
    </div>
    <div name="menu">
        <?php
        echo "<form action='index.php' name='menuform' method='POST' class='menuform'>";
        echo "<input type='submit' name='Home' value='Home'>";
        for($i=0;$i<count($categories);$i++){
            echo "<input type='submit' name='".$categories_nospace[$i]."' value='".$categories[$i]."'>";
        }
        echo "</form>";
        ?>
    </div>
    <?php
        $con=mysql_connect("localhost","root","italia01144152537");
        $title;
        mysql_select_db("sports.com");
        if(isset($_POST["Home"]))
        {
            $query=mysql_query("SELECT * FROM `news`");
        }   
        for($i=0;$i<count($categories);$i++){
            if(isset($_POST[$categories_nospace[$i]]))
            {
                $title=$categories[$i];
                $query=mysql_query("SELECT * FROM `news` WHERE category='$title'");
            }
        }
        echo "<div class='homebody'>";
        echo "<table name='titles'";
        while($row=mysql_fetch_array($query)){
            echo "<tr class='bottomborder'>";
            echo "<td><img src='".$row['image-source']."' width=200px height=200px></td>";
            echo "<td><h2>".$row['title']."</h2><br>";
            echo "<p>".substr($row['post'],0,150) ;
            echo "<a href='article.php?id=".$row['id']."'>...More</a>";
            echo "</P>";
            echo "</td></tr>";
        }
        echo '</ul>';
        echo "</div>";
        
        $ID=$_SESSION["id"];
        $query=mysql_query("SELECT * FROM `user` WHERE id='$ID'");
        $row=mysql_fetch_array($query);
        if($row["type"]=="admin"){
            echo '<div calss="admindiv">';
                echo "<a href='addPost.php?id=".$row['id']."'>Add Post</a>";
            echo '</div>';
        }
       
        mysql_close($con);
    ?>
    </div>
</div>