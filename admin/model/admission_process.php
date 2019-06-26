<?php 
	if(isset($_POST['submit'])){
		if(is_uploaded_file($_FILES['ucasFile']['tmp_name'])){
			$openCSV = fopen($_FILES['ucasFile']['tmp_name'], "r");
			fgetcsv($openCSV);
			while(($eachrow = fgetcsv($openCSV)) !== FALSE){
				$datas = [
					'admission_id' => $eachrow[0],
					'first_name' => $eachrow[1],
					'surname' => $eachrow[2],
					'email' => $eachrow[3],
					'address' => $eachrow[4],
					'phone_number' => $eachrow[5],
					'course_assign' => $eachrow[6],
					'date_of_birth' => $eachrow[7],
					'gender' => $eachrow[8],
					'father_name' => $eachrow[9],
					'mother_name' => $eachrow[10],
					'parent_contact' => $eachrow[11],
					'father_email' => $eachrow[12],
					'year_assign' => $eachrow[13],
					'reason_for_dormant' =>  $eachrow[14],
					'record_status' =>  $eachrow[15],
					'letter_status' => $eachrow[16],
				];
				$admission_data = $admission_tb->saveData($datas, 'admission_id');
				if($admission_data==true){
					header("Location:admission");
				}else{
					echo "Not saved";
				}
			}
			fclose($openCSV);
		}
	}
?> 