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
						<div class="alert alert-info">Time Guide for Each Number</div>
						<p>Number 1  - 9:30 - 10:00</p>
						<p>Number 2  - 10:00 - 10:30</p>
						<p>Number 3  - 10:30 - 11:00</p>
						<p>Number 4  - 11:30 - 12:00</p>
						<p>Number 5  - 12:30 - 1:00</p>
						
						<p>Number 6  - 3:00 - 3:30</p>
						<p>Number 7  - 3:30 - 4:00</p>
						<p>Number 8  - 4:30 - 5:00</p>
					
					
					
				<div class="alert alert-info">Office Hours</div>
						<p>Sunday - Thursday (9:30 am to 1:00 pm)</p>
						<p>Sunday - Thursday (3:00 pm to 5:00 pm)</p>
						
						
					
					
					
				<div class="alert alert-info">Testimonial</div>
				<div class="testimonial_div">
					<p>
					Coming Soon.
					</p>
					</div>		
				</div>
				<div class="span6">
					<img src="img/dr.jpg">
					<br>
					<br>
					
				<div class="alert alert-info">Select Date of Appointment and Treatment Service</div>

		<!-- reservation -->
		<?php if (isset($_POST['yes'])){ 
		$session_id = $_POST['session_id'];
		$date1 = $_POST['date1'];
		$hospital_id = $_POST['hospital'];
		$location_id = $_POST['location'];
		$doctor_id = $_POST['doctors1'];
		$availabledays_id = $_POST['days'];
		$timeslot_id = $_POST['time'];
		mysql_query("insert into schedule (member_id,hospital_id,date,doctor_id,location_id,availabledays_id,timeslot_id,status) values('$session_id','$hospital_id','$date1','$doctor_id','$location_id','$availabledays_id','$timeslot_id','Pending')")or die(mysql_error());
		?>
		<div class="yes"><h3>Your appointment has been set on  <?php echo  $date1; ?>. THANK YOU</h3></div>
		<?php }else{ ?>
		<script>
		alert('error');
		</script>
		<?php } ?>
		<br>
		<br>
	
	<!-- end reservation -->
	


	
	
	
				     </tbody>
                            </table>
				<div class="alert alert-info"></div>	
					<img  class="img img-polaroid" src="images/c.jpg">
				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>