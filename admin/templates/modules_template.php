<div class="panel panel-info">
    <div class="panel-heading">
        <a href="newmodule_form"><button type="button" class="btn btn-primary">Add New Record</button></a>
        <span class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="color:white;">Module Courses<span class="caret"></span></button>
            <ul class="dropdown-menu" style="margin: 0;">
                <?php foreach ($showCourse as $showCourseRow) {?>
                <li><a href="modules&course_id=<?php echo $showCourseRow['course_id']; ?>"><?php echo $showCourseRow['course_name'];?></a></li>
                <?php } ?>
                <li><a href="modules">View All</a></li>
            </ul>
        </span>
    </div>
</div>

<h3 class="text-center">ALL MODULES RECORDS</h3>
<?php
    $table->setHeading(['S.N','Module Code', 'Title', 'Description','Module Leader','Course','Actions']);
    $snum = 1;
    foreach ($allModule as $allModuleRow) {
        if(isset($_GET['course_id'])){
            if($_GET['course_id'] == $allModuleRow['course_id']){
                $table->setRow([ 
                    $snum++ ,
                    $allModuleRow['module_code'], 
                    $allModuleRow['module_name'], 
                    $allModuleRow['module_description'],
                    '',
                    $allModuleRow['course_name'],
                    '<a href="">Edit</a>/
                    <a onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'modules&deleteModule_id='.$allModuleRow['module_id'].'\';}" href="#">Delete</a>']);
            }
        }else{
            $table->setRow([ 
                $snum++,
                $allModuleRow['module_code'],
                $allModuleRow['module_name'],
                $allModuleRow['module_description'],
                '',
                $allModuleRow['course_name'],
                '<a href="newmodule_form&moduleId='.$allModuleRow['module_id'].'">Edit</a>/
                <a onclick="javascript:if(confirm(\'Are you sure?\')){document.location=\'modules&deleteModule_id='.$allModuleRow['module_id'].'\';}" href="#">Delete</a>']);
        }
    }
    $table->generateHTML();
?>
