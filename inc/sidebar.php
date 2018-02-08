<div id="sidebar" class="col m3 sidebar">

	<ul class="subject_list col m12">
	<?php

		$all_subjects = get_all_subjects();

		while( $subject = mysqli_fetch_array($all_subjects) ){

			$subject_id = $subject['id'];
			$pages = get_pages_for_subject( $subject['id'] );

			?>
			<a href='content.php?subj=<?php echo urlencode($subject['id']); ?>' class='<?php echo ($sel_subj == $subject['id']) ? 'selected' : '' ?>'>
				<li class="subject_name">
					<?php echo ucwords($subject['menu_name']); ?>
				</li>
			</a>
				<ul class='pages'>
			<?php

			while( $page = mysqli_fetch_array($pages) ){
			?>
				<a href='content.php?page=<?php echo urlencode($page['id']); ?>' class='<?php echo ($sel_page == $page['id']) ? 'selected' : '' ?>'>
					<li class="page_name">
						<i class='tiny material-icons'>chevron_right</i><?php echo ucwords($page['menu_name']); ?>
					</li>
				</a>
				
			<?php
			}
			?>
			</ul>
			<?php
		}

	?>
	</ul>
</div>