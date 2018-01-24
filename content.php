<?php
	require_once('inc/db_connection.php');
	require_once('inc/functions.php');
	include('inc/head.php');
?>

<div class="container">
	<div class="row">
		<div class="main_content col m12">
			<div class="container">
				<h4>Manage Content</h4>
				<?php

					// 3. preform db query
					$result = mysqli_query( $db, 'SELECT * FROM subjects');
					if(!$result){ die('Database Query Failed: ' . mysqli());}

					// 4. use returned data
					while( $row = mysqli_fetch_array($result) ){
						echo $row['menu_name'] . ' ' . $row['position'] . '<br>';
					}

				?>
			</div>
		</div>
	</div>
</div>
<?php include('inc/footer.php') ?>

