<?php include('header.php'); ?>
<!-- -->
      <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
					<li><a rel="tooltip"  data-placement="bottom" title="Home" id="home" href="index.php" class=""><i class="icon-home icon-large"></i>&nbsp;Home</a></li>
					<li class="active"><a rel="tooltip"  data-placement="bottom" title="Hospitals" id="services" href="services.php" class=""><i class="icon-list icon-large"></i>&nbsp;Hospitals</a></li>
					<li><a rel="tooltip"  data-placement="bottom" title="About Us" id="aboutus" href="about.php" class=""><i class="icon-info icon-large"></i>&nbsp;About Us</a></li>
					<li><a rel="tooltip"  data-placement="bottom" title="Contact Us" id="contactus" href="contact_us.php" class=""><i class="icon-phone icon-large"></i>&nbsp;Contact US</a></li>
					
					</ul>
					     <form class="navbar-search pull-right">
						 <input type="text" class="search-query" placeholder="Search">
					 	 </form>
                 
                    </div>
                </div>
            </div>
        </div>
   
<!-- -->
<?php include('dbcon.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">
				<div class="span12">
			 <img src="img/dr.jpg">
				<div class="login_sign_up">
				</div>
				<!--- login -->
				<?php include('gulshan_content.php'); ?>
				<!-- end login -->


				</div>
				<div class="span12">
				<div class="caption_index">Save your valuable time by setting an appointment using our system</div>
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