<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
					<div class="sti">
						<img src="../img/dr.jpg" class="img-rounded">
					</div>
				<div class="login">
				<div class="alert alert-info"><strong>Please Enter the Details Below..</strong></div>
						<form class="form-horizontal" method="POST">
								<div class="control-group">
									<label class="control-label" for="inputEmail"><strong>Username</strong></label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword"><strong>Password</strong></label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Submit</button>
								</div>
									<?php
if (isset($_POST['submit'])){
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysql_query($query)or die(mysql_error());
$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		if( $num_row > 0 ) {
			header('location:dasboard.php');
	$_SESSION['id']=$row['user_id'];
		}
		else{ ?>
		<br>
		<br>
	<div class="alert alert-danger">!Access Denied</div>	
<?php		}
		
		}
?>
								</div>
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>

<?php include('footer.php') ?>