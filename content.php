<?php
	require_once('inc/db_connection.php');
	require_once('inc/functions.php');

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


	include('inc/head.php');
?>

<div id="content_page" class="">
	<div class="row">
		<?php include('inc/sidebar.php'); ?>
		<div class="main_content col m9">
			<?php 
				if(isset($_GET['subj'])){
					echo '<h3>' . ucfirst($selected_subject['menu_name']) . '</h3>';
				} elseif(isset($_GET['page'])){
					echo '<h3>' . ucfirst($selected_page['menu_name']) . '</h3>';
				} else {
					echo '<h3>Hmm, we can\'t seem to find what you\'re looking for.</h3>';
				}
			?>
			<div class="page_content">
				<?php 
					if(isset($_GET['page'])){
						echo '<h>' . ucfirst($selected_page['content']) . '</h>';
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php include('inc/footer.php') ?>

