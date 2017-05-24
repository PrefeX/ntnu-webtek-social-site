<?php

	chdir('/var/www/html/');
	$command = shell_exec('git pull');
	echo "<pre>$command</pre>";
	echo "is this working?";

?>