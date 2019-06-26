 <?php 
	require '../model/admission_process.php';
	$admission_tb = new DatabaseTable('admission_tb');
	$admissionStudents = $admission_tb->selectAll();

	$sendValues = [
		'users_tb' => $users_tb,
		'table' => $table,
		'admissionStudents' => $admissionStudents
	];
	$wissTitle = "Admission - WISS";
	$wissContent = loadTemplates('../templates/admission_template.php', $sendValues);
?>