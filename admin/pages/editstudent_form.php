<?php 
	require '../model/save_student.php';
	
	$showStudents = $students_tb->selectJoinWithId('users_tb', 'user_id', $_GET['studentId']);
	print_r($showStudents);
	$fetchedStudent = $showStudents->fetch();

	$sendVars = [
		'fetchedStudent' => $fetchedStudent
	];

	$wissTitle = "Edit Student From -WISS";
	$wissContent = loadTemplates('../templates/editstudent_form_template.php', $sendVars);
?>