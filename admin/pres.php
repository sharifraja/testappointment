<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';


// Create connection
$conn = mysql_select_db('database',mysql_connect('localhost','root',''));
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
}

$sql="SELECT * FROM prescription
inner join members
 On prescription.pname=members.firstname";
$retval = mysql_query($sql);
if(! $retval )
{
  die('Could not get data: ' . mysql_error());
}
while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
{
  echo "<big><b>PRESCRIPTION : </b></big><br><br><br>";
  echo "DOCTOR NAME : $docname<br>"; 
  echo "<b>Patient Details : </b><br>";
    echo "PATIENT NAME : {$row['paname']}  <br><br> ".
         "NAME     : {$row['paname']} <br><br> ".
         "AGE    : {$row['age']} <br><br> ".
         "GENDER   : {$row['gender']} <br><br> ".
         "MOBILE   : {$row['contact_no']} <br><br> ".
        
         "--------------------------------<br>";
} 
echo 
     "NAME      : {$row['paname']} <br><br> ".
     "AGE       : {$row['age']} <br><br> ".
     "GENDER    : {$row['gender']} <br><br> ".
     "MOBILE    : {$row['contact_no']} <br><br> ".
    "MEDICINE   : {$row['med']} <br><br> ".
     "DIAGNOSIS  : {$row['diag']} <br><br> ".
     "ADDITIONAL INSTRUCTIONS  : {$row['comm']} <br><br> ".
   
       "--------------------------------<br>";  
mysql_close($conn);
?>
<html>
<input type="button" onclick="window.print();" value="Print Prescription"/><br><br>
<a href="home.html"><b>HOME</b></a>
</html>
