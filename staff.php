<?php
	require_once('inc/db_connection.php');
	require_once('inc/functions.php');
	include('inc/head.php');
?>
<div class="main_content col m12">
	<div class="container">
		<h4>Staff Menu</h4>
		<ul class="staff_menu">
			<li><a class="waves-effect waves-light btn" href="/content.php">Manage Website Content</a></li>
			<li><a class="waves-effect waves-light btn" href="/">Manage Staff Users</a></li>
			<li><a class="waves-effect waves-light btn" href="/">Logout</a></li>
		</ul>
	</div>
</div>
<?php include('inc/footer.php'); ?>
