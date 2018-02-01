<?php
	require_once('inc/db_connection.php');
	require_once('inc/functions.php');
	include('inc/head.php');
?>

<div id="content_page" class="container">
	<div class="row">
		<div class="main_content col m12">
			<div class="container">
				<h4>Manage Content</h4>

				<ul class="subject_list col m6">
				<?php

					$all_subjects = get_all_subjects();

					while( $subject = mysqli_fetch_array($all_subjects) ){

						echo "<li class=\"subject_name\"> {$subject['menu_name']}</li>";

						$subject_id = $subject['id'];

						$pages = get_pages_for_subject( $subject['id'] );

						echo "<ul class='pages'>";

						while( $page = mysqli_fetch_array($pages) ){

							echo "<li class=\"page_name\"><i class=\"tiny material-icons\">chevron_right</i>{$page['menu_name']} </li>";
						}
						echo "</ul>";
					}

				?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php include('inc/footer.php') ?>

