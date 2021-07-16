<?php

include "files/db.php";

$mysql="SELECT * FROM comments ORDER BY id DESC";
$result=$conn->query($mysql);

if($result->num_rows>0)
{
	echo "<a href='index.php'>Logout</a>";
	while ($row=$result->fetch_assoc()) 
	{
		echo "<ul>";
		echo "<li>"."<b>".$row['msg_name']."</b>".": ".$row['msg_value']."</li>";
		echo "</ul>";
	}
}

?>