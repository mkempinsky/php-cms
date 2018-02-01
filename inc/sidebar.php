<div id="sidebar" class="col m3 sidebar">

	<ul class="subject_list col m12">
	<?php

		$all_subjects = get_all_subjects();

		while( $subject = mysqli_fetch_array($all_subjects) ){

			$subject_id = $subject['id'];
			$pages = get_pages_for_subject( $subject['id'] );

			?>
			<li class="subject_name <?php echo ($sel_subj == $subject['id']) ? 'selected' : '' ?>">
				<a href='content.php?subj=<?php echo urlencode($subject['id']); ?>'><?php echo $subject['menu_name']; ?></a>
			</li>
				<ul class='pages'>
			<?php

			while( $page = mysqli_fetch_array($pages) ){
			?>
				<li class="page_name <?php echo ($sel_page == $page['id']) ? 'selected' : '' ?>">
					<a href='content.php?page=<?php echo urlencode($page['id']); ?>'>
						<i class='tiny material-icons'>chevron_right</i><?php echo $page['menu_name']; ?>
					</a>
				</li>
				
			<?php
			}
			?>
			</ul>
			<?php
		}

	?>
	</ul>
</div>