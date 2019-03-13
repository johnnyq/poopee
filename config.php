<?php
	
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "password";
	$database = "poopee";

	$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $database);
	$config_date_format = "g:i A";
	$config_app_name = "poopee";
	$config_login_message = "Authorized Use Only!";
	$config_max_records_per_page = 5;
	$config_theme = "skin-blue";
?>
