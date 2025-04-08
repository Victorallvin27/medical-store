<?php 
   $schema='medicalStore';
   $con = new mysqli('database-1.cxk846iyaaig.ap-south-1.rds.amazonaws.com','admin','rdsConnect',$schema,3309);
//for user informationa making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://13.202.48.4/dev.test/store";
?>
