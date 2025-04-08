<?php 
   $schema='medicalStore';
   $con = new mysqli('13.202.48.4','admin','rdsConnect',$schema,3309);
//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://13.202.48.4/dev.test/store";
?>
