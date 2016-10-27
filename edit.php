<?php

session_start();
include 'includes/connect.php';

$name = $_POST['inputName'];
$password = $_POST['inputPassword'];
$dob = $_POST['inputDOB'];
$aCC = implode( ',' , $_POST['coreComp'] );

$encrypt_password=md5($password);
$username=$_SESSION['myusername'];

if(!empty($name))
{
    mysql_query("UPDATE Profile SET `Name`='$name' WHERE Username='$username'" or die(mysql_error());
                echo("You have successfully updated your Name");
}
if(!empty($password))
{
    mysql_query("UPDATE Profile SET Password='$encrypt_password' WHERE Username='$username'" or die(mysql_error());
                echo("You have successfully updated your Password");
}
if(!empty($dob))
{
    mysql_query("UPDATE Profile SET DOB='$dob' WHERE Username='$username'" or die(mysql_error());
                echo("You have successfully updated your Date of Birth");
}
if(!empty($aCC))
{
    mysql_query("UPDATE Profile SET CC='$aCC' WHERE Username='$username'" or die(mysql_error());
                echo("You have successfully updated your Core Values");
}

   mysql_close(); 

?>