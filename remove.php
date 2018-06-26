<?php

$cronCommand = "*/3 * * * * php /home/sahil/Documents/PHPProject/cronPractice/test.php";

	$commandToExecute = "(crontab -l ; echo \"{$cronCommand}\") 2>&1 | grep -v \"no crontab \" | grep -v test.php |sort - | uniq - | crontab -";


	
	exec($commandToExecute);

?>