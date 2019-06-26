<?php
		$showStaff =$staffs_tb->select('user_id',$_SESSION['staff_session_id']);
		$FindStaff =$showStaff->fetch();
		$showModules = $modules_tb->select('module_id', $FindStaff['module_id']);
		$sendVars  = [
			'showModules' => $showModules
		];
	$wissTitle = "Welcome To WISS";
	$wissContent = 	loadTemplates('../templates/userpage_template.php', $sendVars);


?>