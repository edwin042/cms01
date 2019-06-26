<?php 
	$students = $students_tb->selectSum('student_id', 'passed_out', 1);
	$staff = $staffs_tb->selectSum('staff_id', 'archive_status', 1);
	$courses = $courses_tb->selectSum('course_id', 'course_archive', 1);
	$modules = $modules_tb->selectSum('module_id', 'module_archive', 1);
	$sendArr = [
		'table' =>$table,
		'students' => $students,
		'staff' => $staff,
		'courses' => $courses,
		'modules' => $modules
	];

	$wissTitle = "Archives - WISS";
	$wissContent = loadTemplates('../templates/archives_template.php', $sendArr);
?>