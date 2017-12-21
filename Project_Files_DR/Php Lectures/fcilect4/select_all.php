<a href="insert.html">Insert</a> <br>
<?php
$con=mysql_connect("localhost","root","123");

mysql_select_db("games_db");

$query=mysql_query("select * from games_tables");

echo "<table border='2' width='100%'>";
echo "<tr>";
echo "<td>Id</td><td>Name</td><td>Type</td><td>Price</td>";
echo "</tr>";

while ($row=mysql_fetch_array($query))
{
	echo "<tr>";
	echo "<td>".$row["id"]."</td>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["type"]."</td>";
	echo "<td>".$row["price"]."</td>";
	echo "</tr>";
}

echo "</table>";

mysql_close($con);



?>