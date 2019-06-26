<div class="panel panel-info">
	<div class="panel-heading">
		<a href="newstaff_form"><button type="button" class="btn btn-primary">Add New Record</button></a>
	</div>
</div>
<h3 class="text-center">ALL STAFFS RECORDS</h3>
<?php 
	//creating table
	$table->setHeading([
		'S.N',
		'username',
		'First Name', 
		'Surname', 
		'Date of Birth', 
		'Phone Number', 
		'Email Id',
		'Gender',
		'Role',
		'Year',
		'Archive Status',
		'Reason For Dormant',
		'Module Id',		
		'Actions'
	]);
	$sn = 1;
	foreach ($allStaff as $staffAsRow) {
		if($staffAsRow['archive_status']==1) $archive = "Yes"; 
		else $archive = "No";

		$table->setRow([
		$sn++,
		$staffAsRow['username'],
		$staffAsRow['first_name'],
		$staffAsRow['surname'],
		$staffAsRow['date_of_birth'],
		$staffAsRow['phone_number'],
		$staffAsRow['email'],
		$staffAsRow['gender'],
		$staffAsRow['staff_role'],
		$staffAsRow['year'],
		$archive,
		$staffAsRow['reason_for_dormant'],
		$staffAsRow['module_id'],
		'<a href="newstaff_form&staffId='.$staffAsRow['staff_id'].'">Edit</a>'
		]);
	}
	$table->generateHTML();
?>
<div class="text-center">
	<div class="pagination">
		<li><a href=""><<</a></li>
		<li><a href="">1</a></li>
		<li><a href="">2</a></li>
		<li><a href="">3</a></li>
		<li><a href="">4</a></li>
		<li><a href="">>></a></li>
	</div>
</div>
