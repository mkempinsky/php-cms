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

function get_subject_by_id($subject_id){

	global $db;
	$query = 'SELECT * FROM subjects WHERE id=' . $subject_id . ' LIMIT 1';

	$result_set = mysqli_query( $db, $query );

	// REMEMBER: if no rows are returned, fetch array will return false.

	if ($subject = mysqli_fetch_array($result_set)){

		return $subject;

	} else {

		return NULL;
	}

}

function get_page_by_id($page_id){

	global $db;
	$query = 'SELECT * FROM pages WHERE id=' . $page_id . ' LIMIT 1';

	$result_set = mysqli_query( $db, $query );

	// REMEMBER: if no rows are returned, fetch array will return false.

	if ( $page = mysqli_fetch_array($result_set)){

		return $page;

	} else {

		return NULL;
	}

}

function find_selected_page(){

	global $selected_subject;
	global $selected_page;
	
	if( isset($_GET['subj']) ){
		$sel_subj = $_GET['subj'];
		$sel_page = '';
		$selected_subject = get_subject_by_id($sel_subj);
	} elseif( isset($_GET['page']) ){
		$sel_page = $_GET['page'];
		$sel_subj = '';
		$selected_page = get_page_by_id($sel_page);
	} else {
		$sel_subj = '';
		$sel_page = '';
	}
	
}








