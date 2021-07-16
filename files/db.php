<?php

$conn = new mysqli('localhost','root','root','msg');

if($conn->connect_error)
{
	die("Xatolik".$conn->connect_error);
}

?>