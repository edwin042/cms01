<?php 
	$showModules = $modules_tb->selectAll();

	$wissTitle = "Welcome To WISS";
	$wissContent = 	loadTemplates('../templates/userpage_template.php', ['showModules' => $showModules]);
?>