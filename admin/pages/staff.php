<?php 
	$allStaff = $staffs_tb->selectJoin('users_tb', 'user_id');
	$sendVars = [
		'table' => $table,
		'allStaff' => $allStaff
	];

	$wissTitle = "Staffs Records - WISS";
	$wissContent = loadTemplates('../templates/staff_record_template.php', $sendVars);
?>