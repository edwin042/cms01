<div class="panel panel-info">
    <div class="panel-heading">
		<!-- <span class="dropdown">
			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Course <span class="caret"></span></button>
			<ul class="dropdown-menu" style="margin: 0;">
				<li><a href="">Course 1</a></li>
				<li><a href="">Course 2</a></li>
			</ul>
		</span> -->
        <a href="newcourse_form"><button type="button" class="btn btn-primary">Add New Course</button></a>
    </div>
</div>
<h3 class="text-center">ALL COURSE RECORDS</h3>

<?php
    $table->setHeading(['S.N', 'Course Name', 'Description','Course Leader', 'Actions']);
    $snum = 1;
    foreach ($allCourses as $allCoursesRow) {
        $table->setRow([ $snum++ , $allCoursesRow['course_name'], $allCoursesRow['course_description'], '', '<a href="newcourse_form&courseId='.$allCoursesRow['course_id'].'">Edit</a> / <a onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'courses&deleteCourse_id='.$allCoursesRow['course_id'].'\';}" href="#">Delete</a>']);
    }
    $table->generateHTML();
?>
