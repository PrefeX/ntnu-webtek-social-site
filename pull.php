<?php

	chdir('/var/www/html/');
	$cmd = 'git pull';
	$command = shell_exec($cmd);
	echo "$command";

?>