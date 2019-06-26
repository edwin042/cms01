<?php 
	if(isset($_POST['submit'])){
		$course_data = [
			'course_id'	=>$_POST['course_id'],
			'course_name' => $_POST['course_name'],
			'course_description' => $_POST['course_description'],
		];

		$add_course = $courses_tb->saveData($course_data, 'course_id');
		if($add_course == true){
			header("Location:courses");
		}else{
			echo '<div class="alert alert-danger">Error Saving The Course</div>';
		}

	}
?>