<?php
include("pro.php");
error_reporting(0);
$query="select * from softwares";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result=mysqli_fetch_assoo($data);

//echo $total;
echo $result['lab'];
if($total!=0)
{
	echo "Table has records";
	
}
else{
 echo "Table has no records";
}
?>