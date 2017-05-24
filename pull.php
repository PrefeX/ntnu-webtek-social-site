<?php

	chdir('/var/www/html/');
	$command = shell_exec('git pull');
	echo "$command";

?>