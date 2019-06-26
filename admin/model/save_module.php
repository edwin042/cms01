<?php 
	if(isset($_POST['submit'])){
		$add_module_data = [
			'module_id' => $_POST['module_id'],
			'module_code' => $_POST['module_code'],
			'module_name' => $_POST['module_name'],
			'module_description' => $_POST['module_description'],
			'course_id' => $_POST['course_id']
		];
		$add_module = $modules_tb->saveData($add_module_data, 'module_id');

		if($add_module == true){
			echo '<div class="alert alert-success"><strong>New Module added</strong></div>';
		}else{
			echo '<div class="alert alert-danger"><strong>Error Adding The Module</strong></div>';
		}
	}
?>