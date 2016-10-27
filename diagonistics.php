<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';


// Create connection
$conn = mysql_select_db('470database',mysql_connect('localhost','root',''));
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

$sql="SELECT * from prescription p,members m where p.pname=m.firstname and p.pname=m.firstname";
$retval = mysql_query($sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
  
    
      



  echo "<big><b>PRESCRIPTION </b></big><br><br><br>";
  //echo "DATE : {$row['date']} <br><br><br>"; 
  echo "DOCTOR NAME : {$row['docname']} <br><br><br>"; 
  echo "<b>Patient Details : </b><br><br><br>";
  echo "PATIENT NAME : {$row['pname']}  <br><br><br> ".
         
         "AGE    : {$row['age']} <br><br><br> ".
         "GENDER   : {$row['gender']} <br><br><br> ".
        // "MOBILE   : {$row['contact_no']} <br><br> ".

         "MEDICINE   : {$row['med']} <br><br><br> ".
     "DIAGNOSIS  : {$row['diag']} <br><br><br> ".
     "ADDITIONAL INSTRUCTIONS  : {$row['comm']} <br><br><br> ".
        
         "--------------------------------<br>";


} 
  
//mysql_close($conn);
?>
<html>
<input type="button" onclick="window.print();" value="Print Prescription"/><br><br>
<a href="dasboard.php"><b>Retun To Member Area</b></a>
</html>
