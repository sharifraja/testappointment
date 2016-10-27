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
					<p>Saturday - Friday (9:30 am to 1:00 pm)</p>
					<p>Saturday - Friday (3:00 pm to 5:00 pm)</p>
					
					
					
					
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
					
				<div class="alert alert-info">My Schedule</div>
	
					<table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        
                                        <th>Date</th>                                 
                                        <th>Location</th>
                                        <th>Hospital</th>                                 
                                        <th>Doctor</th>
                                        <th>Day</th>
                                        <th>Time</th>                                 
                              
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php $user_query=mysql_query("select * from schedule where member_id = '$session_id' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									//$id=$row['id'];
									//$member_id = $row['member_id'];
									$doctor_id = $row['doctor_id'];
									$hospital_id = $row['hospital_id'];
									$location_id = $row['location_id'];
									$availabledays_id = $row['availabledays_id'];
									$timeslot_id = $row['timeslot_id'];
									//echo $doctor_id;
									/* member query  */
									//$member_query = mysql_query("select * from members where member_id = ' $member_id'")or die(mysql_error());
									//$member_row = mysql_fetch_array($member_query);
									/* service query  */
                                    $location_query = mysql_query("select * from location where location_id = '$location_id'")or die(mysql_error());
									$location_row = mysql_fetch_array($location_query);

									$hospital_query = mysql_query("select * from hospitals where hospital_id = '$hospital_id'")or die(mysql_error());
									$hospital_row = mysql_fetch_array($hospital_query);


									$doctor_query = mysql_query("select * from doctors where doctor_id = '$doctor_id'")or die(mysql_error());
									$doctor_row = mysql_fetch_array($doctor_query);

                                      
                                    $day_query = mysql_query("select * from availabledays where availabledays_id = '$availabledays_id'")or die(mysql_error());
									$day_row = mysql_fetch_array($day_query);    
                                    
									$time_query = mysql_query("select * from timeslot where timeslot_id = '$timeslot_id'")or die(mysql_error());
									$time_row = mysql_fetch_array($time_query);


									?>
									
									
									 
                                    <td><?php  echo $row['date'];  ?></td> 
                                    <td><?php  echo $location_row['location_name'];  ?></td>
                                    <td><?php  echo $hospital_row['hospital_name'];  ?></td> 
                                    <td><?php  echo $doctor_row['doctor_name'];  ?></td>
                                    <td><?php  echo $day_row['days'];  ?></td>
                                    <td><?php  echo $time_row['time'];  ?></td> 
                             
							
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>


	
	
	
				</div>
				<div class="span3">
				<img src="img/32x32/facebook.png">
				<img src="img/32x32/twitter.png">
				<img src="img/32x32/rss.png">	
					<img  class="img img-polaroid" src="images/c.jpg">
				</div>
				
			</div>
		</div>
    </div>
<?php include('footer.php') ?>