<?php

$host="localhost";
$username="root";
$password="";
$dbname="miniproject";
$conn=mysqli_connect($host,$username,$password,$dbname);


if(isset($_POST['n7'])){
	if(!empty($_POST['n1']) || !empty($_POST['n2']) || !empty($_POST['n3']) || !empty($_POST['n4']) || !empty($_POST['n5']) || !empty($_POST['n6'])){
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$n4=$_POST['n4'];
		$n5=$_POST['n5'];
		$n6=$_POST['n6'];
		$query =$conn->prepare("insert into pcl1 (pc1,journals,books,others,total,disc) values(?,?,?,?,?,?)");
		$query->bind_param("iiiiis",$n1,$n2,$n3,$n4,$n5,$n6);
		$query->execute();
		if($query){
			echo "form submitted successfully";		
		}
		else{
			echo "form not submitted";
		}
	}	
	else{echo "All field are required";}
	if($query){
		$ins =$conn->prepare("update tab1 set a11 =(?) where id=1 ");
		$ins->bind_param("i",$n5);
		$ins->execute();
		if($ins){
			
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
	}
	$ins1=$conn->prepare("update tab5 set d10 =(?) where id=1 ");
		$ins1->bind_param("s",$n6);
		$ins1->execute();
		if($ins1){
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
}
?>