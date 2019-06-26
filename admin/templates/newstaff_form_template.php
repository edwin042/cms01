<?php require '../model/save_staff.php'; ?>
<form id="staff_form" action="" method="POST">
	<h1>Add New Staff</h1>
	<input type="hidden" name="role" value="staff">
	<input type="hidden" name="status" value="0">
	<label class="text-danger">USERNAME AND PASSWORD ARE AUTO GENERATED</label>

	<div class="form-group">
		<label>First Name:</label>
		<input class="form-control" type="text" name="first_name" value="<?php if(isset($_GET['staffId'])) echo $fetchStaff[''] ?>" />
	</div>

	<div class="form-group">
		<label>Last Name:</label>
		<input class="form-control" type="text" name="surname" />
	</div>

	<div class="form-group">
		<label>Date of Birth:</label>
		<input class="form-control" type="date" name="date_of_birth"/>
	</div>

	<div class="form-group">
		<label>Phone Number:</label>
		<input class="form-control" type="text" name="phone_number"/>
	</div>

	<div class="form-group">
		<label>Email:</label>
		<input class="form-control" type="email" name="email"/>
	</div>

	<div class="form-group">
		<label>Gender:</label>
		<div class="radio" name="gender">
			<label class="radio-inline"><input type="radio" name="gender" value="M" checked/>Male</label>
			<label class="radio-inline"><input type="radio" name="gender" value="F"/>Female</label>
		</div>
	</div>

	<div class="form-group">
		<label>Role:</label>
		<select class="form-control" name="staff_role">
			<option value="course leader">Course Leader</option>
			<option value="module leader">Module Leader</option>
		</select>
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
		<label>Archive Status (Default No)</label>
		<select class="form-control" name="archive_status">
			<option value="1">Yes</option>
			<option value="0" selected>No</option>
		</select>
	</div>

	<div class="form-group">
		<label>Reason For Dormant</label>
		<input class="form-control" type="text" name="reason_for_dormant" placeholder="Leave this black if not dormant"/>
	</div>

	<div class="form-group">
		<label>Teach Module</label>
		<select class="form-control" name="module_id">
			<?php foreach ($showModule as $moduleAsRow) { ?>
				<option value="<?php echo $moduleAsRow['module_id']; ?>">
					<?php echo $moduleAsRow['module_code'] ?>:
					<?php echo $moduleAsRow['module_name']; ?>
				</option>
			<?php } ?>
		</select>
	</div>
		<input class="btn btn-primary" type="submit" name="submit" value="Save"/>	
</form>