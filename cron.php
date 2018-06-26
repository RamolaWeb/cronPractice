<?php


	$minute = $_POST["minute"];

	$cronCommand = "*/{$minute} * * * * php /home/sahil/Documents/PHPProject/cronPractice/test.php";

	$commandToExecute = "(crontab -l ; echo \"{$cronCommand}\") 2>&1 | grep -v \"no crontab \" | sort -| uniq - | crontab -";


	
	exec($commandToExecute);
 
 	echo "Cron Task SetUp";


?>