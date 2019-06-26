<?php
	$current_user = $users_tb->select('user_id', $_SESSION['staff_session_id']);
	$fetch_current_user = $current_user->fetch();
	$sendVars = [
		'fetch_current_user' => $fetch_current_user
	];

	$wissTitle = "Profile";
	$wissContent = 	loadTemplates('../templates/profilepage_template.php', $sendVars);
?>