<?php
	require_once('inc/db_connection.php');
	require_once('inc/functions.php');

	if( isset($_GET['subj']) ){
		$sel_subj = $_GET['subj'];
		$sel_page = '';
	} elseif( isset($_GET['page']) ){
		$sel_page = $_GET['page'];
		$sel_subj;
	} else {
		$sel_subj = '';
		$sel_page = '';
	}

	include('inc/head.php');
?>

<div id="content_page" class="">
	<div class="row">
		<?php include('inc/sidebar.php'); ?>
		<div class="main_content col m9">

		</div>
	</div>
</div>
<?php include('inc/footer.php') ?>

