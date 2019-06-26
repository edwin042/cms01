<?php

	$showModule = $modules_tb->selectAll();
	$allStaff = $staffs_tb->selectAll();

	if(isset($_GET['staffId'])){
		$selectedStaff = $staff_tb->select('staff_id', $_GET['staffId']);
		$fetchStaff = $selectedStaff->fetch();
		$dataArray = [
			'allStaff' => $allStaff,
			'showModule' => $showModule,
			'fetchStaff' => $fetchStaff
		];
	}else{
		$dataArray = [
			'allStaff' => $allStaff,
			'showModule' => $showModule
		];
	}
	
	$wissTitle = "Staffs From -WISS";
	$wissContent = loadTemplates('../templates/newstaff_form_template.php', $dataArray);
?>