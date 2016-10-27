<?php
require "connect.php";
$sql = "SELECT doc_name,slots,visit,id from highestvisited_doc where name=".$_GET['name'];
//$rows = mysql_fetch_array($sql);
//$variable_name = $rows['doc_name'];
//echo "$variable_name";
//$visiting = $rows['visit'];
$docs_name = 'Name & Designation :';
$doc_visit = 'Visit :';
foreach ($conn->query($sql) as $row) {
echo "<br><br> $docs_name $row[doc_name]<br> <br> $row[slots]<br><br> $doc_visit $row[visit]<br><br>";
echo  " <input type=\"button\" onclick=\"location.href='appointmentfixing.php?name="."$row[id]'"."\"value=\"Make Appointment\" /><br><br>";
}

?>