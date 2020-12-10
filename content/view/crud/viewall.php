<?php

	$tblname = "tblcrud";
	$prim_id = "id";
	$cnn = new PDO("mysql:host={$host};dbname={$db}", $unameroot, $pw);
	$qry = "SELECT fieldtxt, status, modified, created, id FROM {$tblname} WHERE deletedx=0 ORDER BY {$prim_id} DESC LIMIT :from_record_num, :records_per_page";
	$stmt = $cnn->prepare($qry);
	$stmt->bindParam(":from_record_num", $from_record_num, PDO::PARAM_INT);
	$stmt->bindParam(":records_per_page", $records_per_page, PDO::PARAM_INT);
	$stmt->execute();
	$num = $stmt->rowCount();
	$xno = $from_record_num;

	$qry_page = "SELECT COUNT(*) AS total_rows FROM {$tblname}";
	$stmt_page = $cnn->prepare($qry_page);
	$stmt_page->execute();
	$row_page = $stmt_page->fetch(PDO::FETCH_ASSOC);
	$total_rows = $row_page['total_rows'];

	$page_url="?";
	include_once "../../inc/paging.php";
?>

<table id="listRecView" class="table table-hover table-sm">
	<thead>
		<tr>
			<th>No.</th>
			<th>Fieldtext</th>
			<th>Status</th>
			<th>Modified</th>
			<th>Created</th>
			<th>Ctrl#</th>
			<th class="text-right">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if ($num>0) {
				foreach ($stmt as $row) {
					$xno++;
					extract($row);
					echo '<tr>';
						echo "<td>".$xno."</td>";
						echo "<td>{$fieldtxt}</td>";
						echo "<td>{$status}</td>";
						echo "<td>{$modified}</td>";
						echo "<td>{$created}</td>";
						echo "<td>{$id}</td>";
						echo "<td class='text-right'>";
							echo "<a class='btn-sm btn-success btn-inline' href='#' title='View'><span class='fas fa-edit'></span></a>";
							echo "<a class='btn-sm btn-dark btn-inline' href='#' onclick='trash({$id})' title='Delete'><span class='fas fa-trash-alt'></span></a>";
						echo '</td>';
					echo '</tr>';
				}
			} else {
				echo '<tr>';
					echo '<td colspan="6">No record found.</td>';
				echo '</tr>';
			}
		?>
	</tbody>
</table>