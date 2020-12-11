<?php
	echo "<ul class='pagination justify-content-end'>";	
		$action = isset($_GET['action']) ? $_GET['action'] : "";
		$upidid = isset($_GET['upidid']) ? $_GET['upidid'] : "";
		if ($action=='deleted') {
			echo "<div class='alert alert-danger alert-dismissible mb-0 fade show'><button type='button' class='close' data-dismiss='alert'>&times;</button>You have deleted 1 record. Ctrl#[{$upidid}]</div>";
		}

		// first page button will be here
		if ($page>1) {
			$prev_page = $page - 1;
			echo "<li class='page-item'>";
				echo "<a class='page-link' href='{$page_url}page={$prev_page}'>";
					echo "<span class='fas fa-angle-double-left'></span>";
				echo "</a>";
			echo "</li>";
		}
		 
		// clickable page numbers will be here
		// clickable page numbers

		// find out total pages
		$total_pages = ceil($total_rows / $records_per_page);

		// range of num links to show
		$range = 1;

		// display links to 'range of pages' around 'current page'
		$initial_num = $page - $range;
		$condition_limit_num = ($page + $range)  + 1;

		for ($x=$initial_num; $x<$condition_limit_num; $x++) {
			// be sure '$x is greater than 0' AND 'less than or equal to the $total_pages'
			if (($x > 0) && ($x <= $total_pages)) {
				// current page
				if ($x == $page) {
					echo "<li class='page-item active'>";
						echo "<a class='page-link' href='javascript::void();'>{$x}</a>";
					echo "</li>";
				} else {
					// not current page			
					echo "<li class='page-item'>";
						echo "<a class='page-link' href='{$page_url}page={$x}'>{$x}</a>";
					echo "</li>";
				}
			}
		}
		 
		// last page button will be here
		if ($page<$total_pages) {
			$next_page = $page + 1;

			echo "<li class='page-item'>";
				echo "<a class='page-link' href='{$page_url}page={$next_page}'>";
					echo "<span class='fas fa-angle-double-right'></span>";
				echo "</a>";
			echo "</li>";
		}
		echo "<li class='page-item'>";
			echo "<a class='page-link' href='' title='Refresh'>";
				echo "<span class='fas fa-sync'></span>";
			echo "</a>";
		echo "</li>";
	echo "</ul>";
?>