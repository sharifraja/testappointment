<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('dbcon.php'); ?>
<?php include('navbar_dasboard.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span3">
					    <ul class="nav nav-tabs nav-stacked">
							<li class="active">
							</li>
					
						</ul>
						<p><strong>Today is:</strong></p>
				 <div class="alert alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('d:m:y');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>		
				
				
						
							
				<div class="alert alert-info">Office Hours</div>
						<p>Saturday - Firday (9:30 am to 1:00 pm)</p>
						<p>Saturday - Firday (3:00 pm to 5:00 pm)</p>
					
					
					
				<div class="alert alert-info">Testimonial</div>
				<div class="testimonial_div">
					<p>
					Coming Soon
					</p>
					</div>		
				</div>
				<div class="span6">
					<img src="img/dr.jpg">
					<br>
					<br>
					
				<div class="alert alert-info">Select Date of Appointment and Treatment Service</div>
	
		<!-- reservation -->
		<?php
		if (isset($_POST['sub'])){
		$date = $_POST['date'];
		$location_id = $_POST['location'];
		$hospital_id = $_POST['hospitals'];
		$department_id = $_POST['departments'];
		$doctor_id = $_POST['doctors'];
		$availabledays_id = $_POST['availabledays'];
		$timeslot_id = $_POST['timeslot'];
		
		$query = mysql_query("select * from schedule where date = '$date' and member_id = '$session_id' ")or die(mysql_error());
		$count = mysql_num_rows($query);
	/* 	echo $count; */
		if ($count  > 0){ ?>
		<script>
		alert('You have already schedule on this date');
		</script>
		<?php
		}else{
		$equal = $count + 1 ;
		

		?>
		<div class="question">
		<div class="alert alert-success">Your the number <strong><?php echo $equal; ?></strong> client in this date <strong><?php echo  $date; ?></strong></div>
		<form method="POST" action="yes.php">
		<input type="hidden" name="session_id" value="<?php echo $session_id; ?>" >
		<input type="hidden" name="date1" value="<?php echo $date; ?>" >
		<input type="hidden" name="location" value="<?php echo $location_id; ?>" >
		<input type="hidden" name="hospital" value="<?php echo $hospital_id; ?>" >
		<input type="hidden" name="department" value="<?php echo $department_id; ?>" >
		<input type="hidden" name="doctors1" value="<?php echo $doctor_id; ?>" >
		<input type="hidden" name="days" value="<?php echo $availabledays_id; ?>" >
		<input type="hidden" name="time" value="<?php echo $timeslot_id; ?>" >
		<input type="hidden" name="equal" value="<?php echo $equal; ?>" >
		<p>Are you sure you want to set your Appointment on this date?</p>
		<button name="yes" class="btn btn-success"><i class="icon-check icon-large"></i>&nbsp;Yes</button> &nbsp;  <a href="dasboard.php" class="btn"><i class="icon-remove"></i>&nbsp;No</a>
		</form>
	
		</div>
		<br>
		<br>
		<?php }}   ?>
	<!-- end reservation -->
	
	<form class="form-horizontal" method="POST">
    <div class="control-group">
    <label class="control-label" for="inputEmail">Date</label>
    <div class="controls">
    <input type="text"  class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" maxlength="10" style="border: 3px double #CCCCCC;" required/>
    </div>
    </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Location</label>
    <div class="controls">
		<select name="location" required>
			<option></option>
		<?php $query=mysql_query("select * from location")or die(mysql_error());
		while($row=mysql_fetch_array($query)){
		?>
	
		<option value="<?php echo $row['location_id']; ?>"><?php echo $row['location_name'] ?></option>
		<?php } ?>
		</select>
    </div>
    </div>

     <div class="control-group">
    <label class="control-label" for="inputPassword">Hospitals</label>
    <div class="controls">
		<select name="hospitals" required>
			<option></option>
		<?php $query=mysql_query("select * from hospitals")or die(mysql_error());
		while($row=mysql_fetch_array($query)){
		?>
	
		<option value="<?php echo $row['hospital_id']; ?>"><?php echo $row['hospital_name'] ?></option>
		<?php } ?>
		</select>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputPassword">Departments</label>
    <div class="controls">
		<select name="departments" required>
			<option></option>
		<?php $query=mysql_query("select * from departments")or die(mysql_error());
		while($row=mysql_fetch_array($query)){
		?>
	
		<option value="<?php echo $row['department_id']; ?>"><?php echo $row['department_name'] ?></option>
		<?php } ?>
		</select>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputPassword">Doctors List</label>
    <div class="controls">
		<select name="doctors" required>
			<option></option>
		<?php $query=mysql_query("select * from doctors")or die(mysql_error());
		while($row=mysql_fetch_array($query)){
		?>
	
		<option value="<?php echo $row['doctor_id']; ?>"><?php echo $row['doctor_name'] ?></option>
		<?php } ?>
		</select>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputPassword">Available Days</label>
    <div class="controls">
		<select name="availabledays" required>
			<option></option>
		<?php $query=mysql_query("select * from availabledays")or die(mysql_error());
		while($row=mysql_fetch_array($query)){
		?>
	
		<option value="<?php echo $row['availabledays_id']; ?>"><?php echo $row['days'] ?></option>
		<?php } ?>
		</select>
    </div>
    </div>

    <div class="control-group">
    <label class="control-label" for="inputPassword">Time Slot</label>
    <div class="controls">
		<select name="timeslot" required>
			<option></option>
		<?php $query=mysql_query("select * from timeslot")or die(mysql_error());
		while($row=mysql_fetch_array($query)){
		?>
	
		<option value="<?php echo $row['timeslot_id']; ?>"><?php echo $row['time'] ?></option>
		<?php } ?>
		</select>
    </div>
    </div>


    <div class="control-group">
    <div class="controls">
    <button type="submit" name="sub" class="btn btn-info"><i class="icon-check icon-large"></i>&nbsp;Submit</button>
    </div>
    </div>
    </form>
	

	
	
	
				</div>
				<div class="span3">
				<img src="img/32x32/facebook.png">
				<img src="img/32x32/twitter.png">
				<img src="img/32x32/rss.png">
				    <ul class="nav nav-list">
					 <div class="alert alert-danger"><li class="nav-header">NOTE</li></div>
						
					
				<?php 
				$note_query = mysql_query("select * from note ")or die(mysql_error());
				$note_count =mysql_num_rows($note_query);
				while($note_row = mysql_fetch_array($note_query)){
				if ($note_count > 0){ ?>
				
				<li><i class="icon-stop icon-large"></i>&nbsp;<?php echo $note_row['message'] ?></li>
				<?php
				}  } 
				?>
				</ul>
				<br>
			
				
				
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>