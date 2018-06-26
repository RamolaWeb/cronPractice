<?php

try {
	
     $db = mysqli_connect("localhost","root","","cronTest");

     $query = "insert into cron  values (\"".date("Y-m-s h:i:s")."\");";

     mysqli_query($db, $query);

     mysqli_close($db);


} catch (Exception $e) {
	
	echo $e->getMessage();
}



?>