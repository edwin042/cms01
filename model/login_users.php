<?php 
	if(isset($_POST['login_btn']))
	{
		$auth = $users_tb->select('username', $_POST['username']);
		if($auth->rowCount() > 0)
		{
			$fetchedRow = $auth->fetch();
			if(password_verify($_POST['password'], $fetchedRow['password']) || $_POST['password'] ==$fetchedRow['password'])
			{
				

				if($fetchedRow['role'] == 'admin')
				{				
					$_SESSION['admin_session_id'] = $fetchedRow['user_id'];
					header('Location:../admin/public_html/index.php');
				}
				else if($fetchedRow['role'] == 'student')
				{
					$_SESSION['student_session_id'] = $fetchedRow['user_id'];
					header('Location:student');
				}
				else if ($fetchedRow['role'] == 'staff') {
					$_SESSION['staff_session_id'] = $fetchedRow['user_id'];
					header('Location:staff');
				}
				
			}
			else{
				echo "Password Not Correct";
			}
		}else{
			echo "Users Not Found";
		}
	}
?>