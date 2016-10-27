<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <div class="container">

	<div class="row">	
						<div class="span3">
						<?php include('sidebar.php'); ?>
						</div>
						<div class="span9">
							<img src="../img/dr.jpg" class="img-rounded">
								<?php include('navbar_dasboard.php') ?>
						    <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Today's Schedule</strong>
                            </div>
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" id="example">
                            
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Member</th>
                                        <th>Date</th>                                 
                                        <th>Doctor</th>                                 
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                   
                                  <?php 
								    
									$new = date('d/m/Y');
							
						
									$user_query=mysql_query("select * from schedule where date  like  '%$new%' ")or die(mysql_error());
									while($row=mysql_fetch_array($user_query)){
									$id=$row['id'];
									$member_id = $row['member_id'];
									$doctor_id = $row['doctor_id'];
									$hospital_id = $row['hospital_id'];
									$location_id = $row['location_id'];
									//echo $doctor_id;
									/* member query  */
									$member_query = mysql_query("select * from members where member_id = ' $member_id'")or die(mysql_error());
									$member_row = mysql_fetch_array($member_query);
									/* service query  */
                                    $location_query = mysql_query("select * from location where location_id = '$location_id'")or die(mysql_error());
									$location_row = mysql_fetch_array($location_query);

									$hospital_query = mysql_query("select * from hospitals where hospital_id = '$hospital_id'")or die(mysql_error());
									$hospital_row = mysql_fetch_array($hospital_query);


									$doctor_query = mysql_query("select * from doctors where doctor_id = '$doctor_id'")or die(mysql_error());
									$doctor_row = mysql_fetch_array($doctor_query);
									
									 //<tr class="del<?php echo $id ?>">
									 <td><?php  echo $row['id'];  ?></td>
                                    <td><?php echo $member_row['firstname']." ".$member_row['lastname']; ?></td> 
                                    <td><?php  echo $row['date'];  ?></td> 
                                    <td><?php  echo $location_row['location_name'];  ?></td>
                                    <td><?php  echo $hospital_row['hospital_name'];  ?></td> 
                                    <td><?php  echo $doctor_row['doctor_name'];  ?></td> 
                                    <td><?php  echo $row['status'];  ?></td> 
                                    <td width="100">
                
									   
									</tr>
									<?php } ?>
                           
                                </tbody>
                            </table>
							


						</div>
    </div>
<?php include('footer.php') ?>