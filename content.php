<?php
	require_once('inc/db_connection.php');
	require_once('inc/functions.php');
	include('inc/head.php');

	// 3. preform db query
	$all_subjects = mysqli_query( $db, 'SELECT * FROM subjects');
		if(!$all_subjects){ die('Database Query Failed: ' . mysqli());}
?>

<div id="content_page" class="container">
	<div class="row">
		<div class="main_content col m12">
			<div class="container">
				<h4>Manage Content</h4>

				<ul class="subject_list col m6">
				<?php

					// 4. use returned data
					while( $row = mysqli_fetch_array($all_subjects) ){

						$subject = ucwords(strtolower($row["menu_name"]));

						echo "<li class=\"subject_name\"> {$subject} </li>";
						
						$pages = mysqli_query( $db, 
						"SELECT * FROM pages 
						WHERE subject_id = {$row["id"]}");

						if(!$pages){ die('Database Query Failed: ' . mysqli());}


						echo "<ul class='pages'>";
						while( $row = mysqli_fetch_array($pages) ){

							$page = ucwords(strtolower($row["menu_name"]));

							echo "<li class=\"page_name\"><i class=\"tiny material-icons\">chevron_right</i>{$page} </li>";
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

