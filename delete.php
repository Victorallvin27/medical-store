<?php 
session_start();
include 'assets/db.php';
if (isset($_GET['category'])) 
{
	$userId = $_SESSION['userId'];
	if ($con->query("delete from categories where id = '$_GET[category]' and user_id='$userId'")) 
	{
		header("location:manageCat.php");
	}
	else
		echo "error is:".$con->error;
}
if (isset($_GET['item'])) 
{
	$userId = $_SESSION['userId'];
	if ($con->query("delete from inventeries where id = '$_GET[item]'and user_id='$userId'")) 
	{	$url = "location:inventeries.php?".$_GET['url'];
		header($url);
	}
	else
		echo "error is:".$con->error;
}

 ?>
