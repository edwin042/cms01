<?php 
	if(isset($_POST['submit'])){
		#generate the username 
		$generateUsername = strtolower(str_replace('-', '', $_POST['date_of_birth']));
		#generate the password
		$generatePassword = password_hash(strtolower($_POST['first_name'] . $_POST['phone_number']), PASSWORD_DEFAULT);

		#validating the staff form
		$checkerror = "";
		if($generateUsername == "") $checkerror .= '<h3 style="color:red;">Please enter usename</h3>';
		if($generatePassword == "") $checkerror .= '<h3 style="color:red;">Please enter password</h3>';
		if($_POST['first_name'] == "") $checkerror .= '<h3 style="color:red;">Please enter the first name</h3>';		
		if($_POST['surname'] == "") $checkerror .= '<h3 style="color:red;">Please enter the surname</h3>';
		if($_POST['date_of_birth'] == "") $checkerror .= '<h3 style="color:red;">Please enter date of birth</h3>';
		if($_POST['email'] == "") $checkerror .= '<h3 style="color:red;">Please enter the email</h3>';

		#if everything is validated then only insert into the table
		if(empty($checkerror)){
			$sendUserRecord = [
				'username' => $generateUsername,
				'password' => $generatePassword,
				'first_name' => $_POST['first_name'],
				'surname' => $_POST['surname'],
				'date_of_birth' => $_POST['date_of_birth'],
				'phone_number' => $_POST['phone_number'],
				'email' => $_POST['email'],
				'gender' => $_POST['gender'],
				'status' => $_POST['status'],
				'role' => $_POST['role']
			];
			$insertToUsers = $users_tb->insertData($sendUserRecord);

			$lastId =  $users_tb->selectLast('user_id');
			$lastIdFetch = $lastId->fetch();

			$sendStaffRecord = [
				'staff_role' => $_POST['staff_role'],
				'year' => $_POST['year'],
				'archive_status' => $_POST['archive_status'],
				'reason_for_dormant' => $_POST['reason_for_dormant'],
				'user_id' => $lastIdFetch['MAX(user_id)'],
				'module_id' => $_POST['module_id']
			];
			$insertToStaff = $staffs_tb->insertData($sendStaffRecord);		

			if($insertToUsers == true && $insertToStaff == true){
				echo '<script>alert("Staff Saved");document.location="staff"</script>';
			}
		}else{
			echo $checkerror;
		}
	}
?>