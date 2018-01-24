<?php
	
	require('constants.php');

	// 1. connect to db
	$db = mysqli_connect( DB_SERVER, DB_USER, DB_PASS);

	if(!$db){
		die('Database Connection Failed: ' . mysqli_error());
	}

	// 2. select db to use 
	$db_select = mysqli_select_db( $db, DB_NAME );

	if(!$db_select){
		die('Database Selection Failed: ' . mysqli_error());
	}
	
?>