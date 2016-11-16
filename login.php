<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('dbcon.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
			 <img src="img/dr.jpg">
				<div class="login_sign_up">
				<p><a rel="tooltip"  data-placement="bottom" title="Click Here to Sign UP" id="signup" href="signup.php">Not a Member? Sign Up Now</a></p>
				</div>
				<!--- login -->
				<?php include('login_modal.php'); ?>
				<!-- end login -->
				</div>
				<div class="span12">
				<div class="caption_index">Save your Time and Energy By Using Our Service</div>
				</div>		
				<div class="clearfix"></div>
				<div class="span12">
					<?php include('thumbnail.php'); ?>
				</div>
				<div class="span12">
				<?php include('content1.php'); ?>
				</div>
				<div class="span12">
				<?php include('content2.php'); ?>	
				</div>
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
