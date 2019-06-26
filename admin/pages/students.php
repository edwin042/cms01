<?php 
	$allStudent = $students_tb->selectJoin('users_tb', 'user_id');
	$sendVars = [
		'table' => $table,
		'allStudent' => $allStudent
	];

	$wissTitle = "Student Records - WISS";
	$wissContent = loadTemplates('../templates/student_record_template.php', $sendVars);
?>