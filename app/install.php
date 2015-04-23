<?php
/*
	Developer: Joshua Pack
*/
require($basedir . "/app/password.php");

if (!PasswordCompat\binary\check()) {
	echo 'You need to have PHP >= 5.3.7 for security reasons in order to install.<br />';
	die();
}

echo "Ready to install.<br/>";