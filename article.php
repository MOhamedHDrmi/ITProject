<?php
echo "<style type='text/css'>"; 
include'style.css';
echo "</style>";
$id=$_GET["id"];
/*echo $id;*/
?>
<div class="outdiv">
<div name="head">
        <img src="images\\signup.png" >
    </div>
    <div name="menu">
        <ul>
            <li><a href="#home">Home</a></li>
        </ul>
    </div>
<?php
   $id=$_GET["id"];
   $con=mysql_connect("localhost","root","italia01144152537");
mysql_select_db("sports.com");
 $query=mysql_query("SELECT * FROM `news` WHERE `id` = '$id' ");
 $row=mysql_fetch_array($query);
    echo '<div class="article">';
         echo'<div class="title">';
             echo'<h3 name="category">';
                echo $row["category"];
            echo' </h3>';
             echo '<h1 name="mainHead">';
             echo $row["title"];
            echo'</h1>';
       echo '</div>';
       echo '<div class="articleImage">';
           echo "<img src='".$row["image-source"]."'>";
        echo'</div>';
       echo '<div class="post">'; 
        echo $row["post"];
       echo' <div>';
    echo'</div>';
    mysql_close($con);
?>
</div>