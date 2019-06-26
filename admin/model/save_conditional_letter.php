<?php 
	if(isset($_POST['submit'])){
		$letter_file = fopen("../student_records/conditional_letter.txt", "w");
		$edit_file = $_POST['letter_text'];
		fwrite($letter_file, $edit_file);
		fclose($letter_file);
		header("Location:casepaper&admissionId=".$_GET['admissionId']."");
	}
?>