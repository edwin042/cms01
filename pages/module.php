<?php 
	$showModules = $modules_tb->select('module_id', $_GET['module']);
	$fetchModules = $showModules->fetch();
	$findAssignment = $assignments_tb->selectJoin('grades_tb', 'assignment_id');
	
	if(isset($_SESSION['student_session_id'])){
		//getting student id from session id
		$studentuser = $students_tb->select('user_id', $_SESSION['student_session_id']);
		$fetchStd = $studentuser->fetch();
			//using the student id to find all the grades of the student
		$stdGrade = $grades_tb->select('student_id', $fetchStd['student_id']);
		//finding all assignments for a module

		$sendVars = [
			'fetchModules' => $fetchModules, 
			'stdGrade' => $stdGrade, 
			'findAssignment' => $findAssignment 
		];
	}else{
		$sendVars = [
			'fetchModules' => $fetchModules,
			'findAssignment' => $findAssignment
		];
	}

	$moduleTitle = $fetchModules['module_name'];
	$moduleContent = loadTemplates('../templates/modulecontents_template.php',  $sendVars);

	$variablesArray = [
		'moduleTitle' => $moduleTitle,
		'moduleContent' => $moduleContent,
		'fetchModules' => $fetchModules
	];

	$wissTitle = "WISS - MODULES";
	$wissContent = loadTemplates('../templates/modulepage_template.php', $variablesArray);
?>