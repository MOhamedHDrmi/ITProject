<?php

$result=$_POST["result"];
if ($result >50 && $result <= 60)
echo "your grade: D";
else if ($result >60 && $result <= 70)
echo "your grade: C";
else if ($result >70 && $result <= 80)
echo "<h1>your grade: B</h1>";
else if ($result >80 && $result <= 100)
echo "<b><i>your grade: A</i></b>";

?>