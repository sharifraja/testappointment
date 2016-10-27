<?php
require "connect.php";
echo "Welcome to our online appointment system";
$sql = "SELECT  doc_name,slots,visit,roomnumber,serial from highestvisited_doc where id=".$_GET['name'];
$docs_name = 'Name & Designation :';
$doc_visit = 'Visit :';
$doc_room ='Room Number :';
$doc_serial ='Serial Number';
foreach ($conn->query($sql) as $row) {
echo "<br><br> $docs_name $row[doc_name]<br> <br> $row[slots]<br><br> $doc_serial $row[serial] <br><br>$doc_visit $row[visit]<br><br>$doc_room $row[roomnumber]<br><br>";
}
echo "your appointment has fixed-please come 15 minutues before allocated time<br><br>";
echo "<button onlick='window.print();'>print appointment</button>";
?>