<?Php
@$cat_id=$_GET['location_id'];
//$cat_id=2;
/// Preventing injection attack //// 
if(!is_numeric($location_id)){
echo "Data Error";
exit;
 }
/// end of checking injection attack ////
require "config.php";

$sql="select subcategory,subcat_id from subcategory where cat_id='$cat_id'";
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);

$main = array('data'=>$result);
echo json_encode($main);
?>