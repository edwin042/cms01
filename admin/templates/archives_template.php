<div class="panel panel-info">
	<div class="panel-heading">
		Archive Data
		<!-- <a href="user_form"><button type="button" class="btn btn-primary">Add New Record</button></a> -->
		<span class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Level<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="">1st Year</a></li>
				<li><a href="">2nd Year</a></li>
				<li><a href="">3rd Year</a></li>
			</ul>
		</span>
		<span class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Year<span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="">2018</a></li>
				<li><a href="">2017</a></li>
				<li><a href="">2016</a></li>
				<li><a href="">2015</a></li>
			</ul>
		</span>
	</div>
</div>
<h3><strong>Year 2018 Data</strong></h3>
<div class="row">
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Students Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-address-book-o" style="color: #000B14;"></i>
					<?php 
						echo $students['COUNT(student_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Staff Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-male" style="color: #000B14;"></i>
					<?php 
						echo $staff['COUNT(staff_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Module Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-book" style="color: #000B14;"></i>
					<?php 
						echo $modules['COUNT(module_id)'];
					?>
				</h1>
			</div>
		</div>
	</div><div class="col-sm-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Total Course Archive</div>
			<div class="panel-body">
				<h1>
					<i class="fa fa-book" style="color: #000B14;"></i>
					<?php 
						echo $courses['COUNT(course_id)'];
					?>
				</h1>
			</div>
		</div>
	</div>
</div>
<h3>Students</h3>
<?php 
	$table->setHeading(['S.N.', '1st Year', '2nd Year', '3rd Year']);
	$table->setRow(['1', '150', '100', '50']);
	$table->generateHTML();
?>