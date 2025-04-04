<?php 
   $schema='medical_store';
   $con = new mysqli('localhost','root','',$schema);
//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://localhost/dev.test/store";
?>