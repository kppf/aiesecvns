<?php
// DO NOT PLAY WITH THIS FILE UNLESS YOU KNOW WHAT THE HELL YOU ARE DOING
define('ASSETS','http://localhost/aiesec-new/assets/',true);
define('ASSETS_ROOT',__DIR__ . '/assets/',true);
define('FNS',__DIR__ . '/aiesec-fns',true);
define('ROOT',__DIR__,true);
define('WEB','http://localhost/aiesec-new', true);

// DATABASE CONFIG
define('DB_ENGINE','mysql',true);
define('DB_HOST','localhost',true);
define('DB_NAME','aiesec',true);
define('DB_USER','root',true);
define('DB_PASSWD','',true);

// preventing XSS attack by htmlspecialchars on every GET and POST requests
htmlspecial_array($_GET);
htmlspecial_array($_POST);

function htmlspecial_array(&$variable) {
	foreach ($variable as &$value) {
		if (!is_array($value)) { 
			$value = htmlspecialchars($value); 
		} else { 
			htmlspecial_array($value); 
		}
	}
}
?>