<?php 
/** Database config **/
if($_SERVER['SERVER_NAME'] == 'localhost') {
	
	/** Dev **/
	define('DBNAME', 'mysql_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');
	
	define('ROOT', 'http://localhost/framework/public/');

} else {

	/** Production **/
	define('DBNAME', 'mysql_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', '');

	define('ROOT', 'https://www.yourwebsite.pl');

}

/** App config **/
define('APP_NAME', "Enter the name of the application.");
define('APP_DESC', "Enter the application description.");

/* SESSION PARAMS */
define('SESSION_NAME', 'FRAMEWORK');
define("TIMEZONE", "Europe/Warsaw");
define("COOKIE_EXPIRE", 60 * 60 * 24 * 30);
define("COOKIE_PATH", "/");
define("COOKIE_DOMAIN", ".localhost"); //enter domain here
define('GC_MAXLIFETIME', '3440');

/** Show errors **/
define('DEBUG', true);
