<form action="" method="POST">
	<h1>Add New Users</h1>
	<input type="hidden" name="status" value="0"/>
	<!-- <div class="form-group">
		<label>Student's UID:</label>
		<?php $studentuid = 1; ?>
		<input class="form-control" type="text" name="user_id" value="<?php echo $fetchedStudent[]; ?>" readonly/>
	</div> -->
	<div class="form-group">
		<label>First Name:</label>
		<input class="form-control" type="text" name="first_name" value="<?php echo $fetchedStudent['first_name']; ?>">
	</div>
	<div class="form-group">
		<label>Last Name:</label>
		<input class="form-control" type="text" name="last_name" value="<?php echo $fetchedStudent['last_name']; ?>">
	</div>
	<div class="form-group">
		<label>Username:</label>
		<input class="form-control" type="text" name="username" value="<?php echo $fetchedStudent['username']; ?>">
	</div>
	<div class="form-group">
		<label>Password:</label>
		<input class="form-control" type="password" name="password" value="<?php echo $fetchedStudent['password']; ?>">
	</div>
	<div class="form-group">
		<label>Email:</label>
		<input class="form-control" type="email" name="email" value="<?php echo $fetchedStudent['email']; ?>">
	</div>
	<div class="form-group">
		<label>Date of Birth:</label>
		<input class="form-control" type="date" name="date_of_birth" value="<?php echo $fetchedStudent['date_of_birth']; ?>">
	</div>
	<div class="form-group">
		<label>Phone Number:</label>
		<input class="form-control" type="text" name="phone_number" value="<?php echo $fetchedStudent['phone_number']; ?>">
	</div>
	<div class="form-group">
		<label>Father's Name:</label>
		<input class="form-control" type="text" name="father_name" value="<?php echo $fetchedStudent['father_name']; ?>">
	</div>
	<div class="form-group">
		<label>Mother's Name:</label>
		<input class="form-control" type="text" name="mother_name" value="<?php echo $fetchedStudent['mother_name']; ?>">
	</div>
	<div class="form-group">
		<label>Parent's Contact:</label>
		<input class="form-control" type="text" name="parent_contact" value="<?php echo $fetchedStudent['parent_contact']; ?>">
	</div>
	<div class="form-group">
		<label>Father's Email: </label>
		<input class="form-control" type="email" name="father_email" value="<?php echo $fetchedStudent['father_email']; ?>">
	</div>
	
	<div class="form-group">
		<label>Year:</label>
		<div class="radio" name="year">
			<label class="radio-inline"><input type="radio" name="year" value="1" checked/>Year 1</label>
			<label class="radio-inline"><input type="radio" name="year" value="2" />Year 2</label>
			<label class="radio-inline"><input type="radio" name="year" value="3" />Year 3</label>
		</div>
	</div>
	<div class="form-group">
		<label>Passed Out </label>
		<select class="passed_out">
			<option value="0">No</option>
			<option value="1">Yes</option>
		</select>
	</div>
	<input class="btn btn-primary" type="submit" name="submit" value="Submit"/>	
</form>