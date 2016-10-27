	<?php
		include('dbcon.php');
		if (isset($_POST['submit'])){
		$docname=$_POST['docname'];
		$pname=$_POST['pname'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$med=$_POST['med'];
		$diag=$_POST['diag'];
		$comm=$_POST['comm'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contact_no=$_POST['contact_no'];
		
	
	}
	?>
<form method="post">	
	<div class="span5">
	<div class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputEmail">Doctor's Name</label>
			<div class="controls">
			<input type="text" name="docname" value="<?php if (isset($_POST['submit'])){echo $docname;} ?>" placeholder="Full Name" required> 
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputEmail">Patient's Name</label>
			<div class="controls">
			<input type="text" name="pname" value="<?php if (isset($_POST['submit'])){echo $pname;} ?>" placeholder="Full Name" required> 
			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Gender</label>
			<div class="controls">
			<select name="gender" required>
			<option><?php if (isset($_POST['submit'])){echo $gender;} ?></option>
			<option>Male</option>
			<option>Female</option>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Age</label>
			<div class="controls">
			<input name="age" class="span1" type="number"  value="<?php if (isset($_POST['submit'])){echo $age;} ?>" placeholder="Age" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">Dosage</label>
			<div class="controls">

		<td><br>
        </td>
        <td>
		<input name="dose" type="checkbox"> Morning<br>
        <input name="dose" type="checkbox"> Afternoon<br>
        <input name="dose" type="checkbox"> Night<br>
        </td>
        </div>
		</div>

		<div class="control-group">
			<label class="control-label" for="inputEmail">Medicine</label>
			<div class="controls">
			<textarea name="med" value="<?php if (isset($_POST['submit'])){echo $med;} ?>" style="width:250px; height:100px;" placeholder="List Of Medicine" required></textarea>



			</div>
		</div>
<div class="control-group">
			<label class="control-label" for="inputEmail">Diagnosis</label>
			<div class="controls">
			<textarea name="diag" value="<?php if (isset($_POST['submit'])){echo $diag;} ?>" style="width:250px; height:100px;" placeholder="Diagnosis" required></textarea>



			</div>
		</div>

<div class="control-group">
			<label class="control-label" for="inputEmail">Additional Comment</label>
			<div class="controls">
			<textarea name="comm" value="<?php if (isset($_POST['submit'])){echo $comm;} ?>" style="width:250px; height:100px;" placeholder="Additional Comment" required></textarea>



			</div>
		</div>


		

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </div>
</div>
	
	
	<div class="span6">
	
	
	<div class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="inputPassword">Address</label>
			<div class="controls">
			<input type="text" name="address" value="<?php if (isset($_POST['submit'])){echo $address;} ?>" placeholder="Address" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Contact No</label>
			<div class="controls">
			<input type="text" name="contact_no" value="<?php if (isset($_POST['submit'])){echo $contact_no;} ?>"placeholder="Contact No" required>
			</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Email Address</label>
			<div class="controls">
			<input type="text" name="email" value="<?php if (isset($_POST['submit'])){echo $email;} ?>" placeholder="Email Address" required> 
			</div>
		</div>
		
	<div class="control-group">
				<label class="control-label" for="inputEmail"></label>
				<div class="controls">
			<script type="text/javascript">
				jQuery(document).ready(function() {
					$('#refresh').tooltip('show');
					$('#refresh').tooltip('hide');
				})
			</script>
				<img  src="generatecaptcha.php?rand=<?php echo rand(); ?>" id='captchaimg' > 
				<a href='javascript: refreshCaptcha();'><i data-placement="right" id="refresh"  title="Click to Refresh Code" class="icon-refresh icon-large icon-spin"></i></a> 
				<script language='JavaScript' type='text/javascript'>
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
			</script>
				
				</div>
    </div>
	
		    <div class="control-group">
    <label class="control-label" for="inputPassword">Enter the Code Above</label>
    <div class="controls">
    <input id="code" name="code" type="text" placeholder="Enter the Code Above" required></td>
	
	<?php 

if(isset($_POST['submit']))
{
	$docname=$_POST['docname'];
	$pname=$_POST['pname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$med=$_POST['med'];
	$diag=$_POST['diag'];
	$comm=$_POST['comm'];
	$address=$_POST['address'];
	$email=$_POST['email'];
	$contact_no=$_POST['contact_no'];
	if(strcmp($_SESSION['code'], $_POST['code']) != 0)
	{
	?>
	<span class="label label-important">Code Does Not Match</span>
<?php
}else if(strcmp($_SESSION['code'], $_POST['code']) == 0){ ?>
<?php
	mysql_query("insert into prescription (docname,pname,age,gender,med,diag,comm,address,email,contact_no)
	values ('$docname','$pname','$age','$gender','$med','$diag','$comm','$address','$email','$contact_no')
	")or die(mysql_error());?>
<script type="text/javascript">
window.location='save.php';
</script>
<?php
}else{
echo " ";
}}
?>
    </div>
    </div>
	
			
		
		
	</div>
		
		</div>	

	
</form>