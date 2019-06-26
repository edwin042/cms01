<h3>View The Letter Templates</h3>
<div class="panel panel-info">
	<div class="panel-heading nav nav-tabs">
		<a data-toggle="tab" href="#conditional"><button type="button" class="btn btn-primary">View Conditional Letter</button></a>
		<a data-toggle="tab" href="#unconditional"><button type="button" class="btn btn-primary">View Unconditional Letter</button></a>
	</div>
</div>
<h3 class="well text-danger">Please Send the Letter to the corresponding students only</h3>
<div class="tab-content">
	<div id="conditional" class="panel panel-info tab-pane fade">
		<div class="panel-heading"><h3>Conditional Letter Template</h3></div>
		<?php 
			$studentAdmission = $admission_tb->select('admission_id', $_GET['admissionId']);
			$fetchStd = $studentAdmission->fetch();
		 ?>
		<div id="conditional_letter" class="panel-body">
		<?php 
			$letter_file = fopen("../student_records/conditional_letter.txt", "r");
			echo fread($letter_file, filesize("../student_records/conditional_letter.txt"));
			fclose($letter_file);
		?>
		</div>
		<div class="panel-footer">
			
			<a href="edit_conditional_letter&admissionId=<?php echo $_GET['admissionId']; ?>">
				<button class="btn btn-primary">Edit Template</button>
			</a>
			<button style="float: right;" class="btn btn-primary" onclick="printLetter('conditional_letter');">Print</button>
			<script type="text/javascript">
				function printLetter(letterName){
					var letter = document.getElementById(letterName).innerHTML;
					var main = document.body.innerHTML;
					document.body.innerHTML = letter;
					window.print();
					document.body.innerHTML = main;
				}
			</script>
		</div>
	</div> 

	<div id="unconditional" class="panel panel-info tab-pane fade">
		<div class="panel-heading"><h3>Unconditional Letter Template</h3></div>
		<div class="panel-body">
		<?php 
			$letter_file = fopen("../student_records/unconditional_letter.txt", "r");
			echo fread($letter_file, filesize("../student_records/unconditional_letter.txt"));
			fclose($letter_file);
		?>
		</div>
		<div class="panel-footer">
			<a href="edit_unconditional_letter&admissionId=<?php echo $_GET['admissionId']; ?>"><button class="btn btn-primary">Edit Template</button></a>
			<button style="float: right;" class="btn btn-primary">Print</button>
		</div>
	</div> 
</div>
<?php 
	//show files and download the file
	// $dir = "../test_files/";
	// if(is_dir($dir)){
	// 	if($dh = opendir($dir)){
	// 		while (($file = readdir($dh))!== false) {
	// 			echo '<a href="'.$dir.$file.'" download>'.$file.'</a><br>';
	// 		}
	// 		closedir($dh);
	// 	}
	// }
?>