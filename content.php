<?php
	require_once('inc/db_connection.php');
	require_once('inc/functions.php');
	include('inc/head.php');

	find_selected_page();
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
				if(isset($_GET['page'])){
					echo '<p>' . ucfirst($selected_page['content']) . '</p>';
				}
			?>
		</div>
	</div>
</div>
<?php include('inc/footer.php') ?>

