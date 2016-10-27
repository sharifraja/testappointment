<?php
require "connect.php";
$sql = "SELECT doc_name,slots,visit from highestvisited_doc WHERE  visitedtimes=(SELECT MAX(visitedtimes) FROM highestvisited_doc)";
$variableName = 'Total Visited :';
$variable ='Times';
$variable_docname = 'Name :';
foreach ($conn->query($sql) as $row) 
{
	echo "<br> $variable_docname $row[doc_name]<br> <br> $row[slots]<br> <br> $variableName  $row[visit] $variable";

}
?>