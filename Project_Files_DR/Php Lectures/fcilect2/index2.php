<form method="post" action="#" name="f1" id="f1">
<input type="text" name="fname" id="fname" value="<?php echo $_POST["fname"]; ?>"><br>
<input type="password" name="pass" id="pass"><br>
<input type="submit" value="login" name="login">
</form>

<?php
$fname=$_POST["fname"];
$pass=$_POST["pass"];
if (isset($_POST["login"]))
{
if($fname=="esraa" && $pass=="123")
echo "welcome ".$fname;
else
echo "try again";
}
?>



