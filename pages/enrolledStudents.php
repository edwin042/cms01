<?php
	
	$staffs_tb =new DatabaseTable('staffs_tb');
	$modules =new DatabaseTable('modules_tb');
	$courses =new DatabaseTable('courses_tb');
   	$students =new DatabaseTable('students_tb');

   	$staffId =$_SESSION['staff_session_id'];

	$findStaff =$staffs_tb->select('user_id',$staffId);
	$FetchStaff =$findStaff->fetch();
	$moduleId =$FetchStaff['module_id'];


   	$fetchModule =$modules->select('module_id',$moduleId);
   	$fetch =$fetchModule->fetch();
   	$findCourse =$fetch['course_id'];
   	
   	$student =$students->selectJoinWithAnd('users_tb', 'user_id', 'course_assign', $findCourse);




$sendVars = [
	'student'=>$student,
	'table' => $table
];

$wissTitle = "Enrolled Students";
$wissContent = loadTemplates('../templates/enrolled_template.php',$sendVars);

?>