<?Php

require "connect.php";// database connection

if(isset($_POST['select'])){
	$select  = $_POST['select'];
	if($select=="Mohakhali"){
	$sql="SELECT name,location,id FROM mohakhali_hospitals order by location"; 
}
if($select=="Gulshan"){
	$sql="SELECT name,location FROM gulshan_hospitals order by location"; 
}
	foreach ($conn->query($sql) as $row) {
 	echo " <tr> <br><br> <td>$row[name]</td><br> ,<br> <td>$row[location],</td><br><br></tr>";
 	echo " <input type=\"button\" onclick=\"location.href='doc.php?name="."$row[id]'"."\"value=\"Search for Doctors\" /><br><br>";

	}
	echo "<br> <input type=\"button\" onclick=\"location.href='bestdoctor.php';\" value=\"Most Visited Doctors\" />";

}


?>

<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>

<table style="width:100%">
	</table>

</body>
</html>