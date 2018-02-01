<?php

require_once('db_connection.php');

// this file is where to store all basic functions

function confirm_query($result_set){
	if(!$result_set){
		die('Database Query Failed: ' . mysqli_error($result_set) );
	}
}

function get_all_subjects(){
	global $db;
	$query = 'SELECT * 
		FROM subjects';

	$all_subjects = mysqli_query( $db, $query);

	confirm_query($all_subjects);

	return $all_subjects;

}

function get_pages_for_subject( $subject_id ){

	global $db;
	$query = 'SELECT * FROM pages WHERE subject_id = ' . $subject_id;

	$pages = mysqli_query( $db, $query);

	confirm_query($pages);

	return $pages;

}








