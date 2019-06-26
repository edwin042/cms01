<div class="panel panel-info">
	<div class="panel-heading">
		<a href="assignment"><button type="button" class="btn btn-primary">View Assignment</button></a>
		<span class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Year<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="">1st Year</a></li>
				<li><a href="">2nd Year</a></li>
				<li><a href="">3rd Year</a></li>
			</ul>
		</span>
	</div>
</div>
<h3 class="text-center">ALL STUDENT RECORDS</h3>
<div>
	<?php 
	$table->setHeading([
		'S.N',
		'username',
		'First Name', 
		'Surname', 
		'Date of Birth', 
		'Phone Number', 
		'Email Id',
		'Gender',
		'Father\'s Name',
		'Mother\'s Name',
		'Parent\'s Contact',
		'Year Assigned',
		'Father\'s Email',
		'Course Assigned', 
		'Actions'
	]);
	$sn = 1;
	foreach ($allStudent as $userRow) {
		$table->setRow([
			$sn++,
			$userRow['username'], 
			$userRow['first_name'], 
			$userRow['surname'], 
			$userRow['date_of_birth'], 
			$userRow['phone_number'], 
			$userRow['email'], 
			$userRow['gender'], 
			$userRow['father_name'], 
			$userRow['mother_name'], 
			$userRow['parent_contact'], 
			$userRow['year'], 
			$userRow['father_email'], 
			$userRow['course_assign'], 
			'<a href="editstudent_form&studentId='.$userRow['user_id'].'">Edit</a>'
		]);
	}
	$table->generateHTML();
	?>
</div>
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