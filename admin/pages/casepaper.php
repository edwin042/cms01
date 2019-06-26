<?php 
	$admission_tb = new DatabaseTable('admission_tb');
	$wissTitle = "Case Paper - WISS";
	$wissContent = loadTemplates('../templates/casepaper_template.php', ['admission_tb' => $admission_tb]);
?>