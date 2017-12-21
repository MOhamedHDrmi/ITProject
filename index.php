<?php
echo "<style type='text/css'>"; 
include'style.css';
echo "</style>";
$arr = array('A','B','C','D','A','B','C','D','A','B','C','D','A','B','C','D');
?>

<div class="outdiv">
    <div name="head">
        <img src="images\\signup.png" >
    </div>
    <div name="menu">
        <ul>
            <li><a href="#home">Home</a></li>
            <!--<li><a href="#barca">Barcalona</a></li>
            <li><a href="#chels">Chelsea</a></li>
            <li><a href="#Other">Other</a></li>
            <li name="searchbar"><input type="text" name="search" placeholder="Type To Search"></li>
            <li name="login"><a href="login.php">Login</a></li>-->
        </ul>
    </div>
    <?php 
    echo "<div>";
    echo '<ul name="artical">';
    for($i=0 ; $i<count($arr);$i++){
        echo '<li name="view">'. $arr[$i] ."</li>";
    }
    echo '</ul>';
    echo "</div>";
    ?>
    </div>
</div>
