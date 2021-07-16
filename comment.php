<?php

include "files/db.php";

if(isset($_POST['submit']))
{

	$name=$_POST['name'];
	$value=$_POST['msg'];

	if(empty($name) || empty($value))
	{
		header("Location:index.php?error=Something went error");
	}
	
	else
	{
		$sql=$conn->prepare("INSERT INTO comments(msg_name,msg_value) VALUES(?,?)");
		$sql->bind_param('ss',$name,$value);
		$sql->execute();
		$sql->close();
		header("Location:index.php?success=Your comment saved");
	}

}

$conn->close();

?>