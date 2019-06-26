<?php 
	$current_user = $users_tb->select('user_id', '1');
	$fetch_current_user = $current_user->fetch();

	$datas = [
		'$current_user' => $current_user,
		'fetch_current_user' =>$fetch_current_user
	];

	$wissTitle = "Profile Page - WISS";
	$wissContent = loadTemplates('../templates/profile_template.php', $datas);
?>