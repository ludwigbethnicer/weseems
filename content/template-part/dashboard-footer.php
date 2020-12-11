<?php
	$chckfledashf = file_exists("../../assets/css/style.css");
	if ($chckfledashf) {
		$dirbakf = "../../";
	} else {
		$dirbakf = "../../../";
	}
?>

	</div>
	<script src="<?php echo $dirbakf; ?>assets/js/dashboard.js"></script>
	<script src="<?php echo $dirbakf; ?>assets/js/script.js"></script>
</body>
</html>