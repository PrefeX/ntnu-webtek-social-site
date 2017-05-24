<?php

	chdir('/var/www/html/');
	$cmd = 'git pull';
	$command = shell_exec($cmd);
	echo "<pre>$command</pre>";
	echo "is this working?";

?>