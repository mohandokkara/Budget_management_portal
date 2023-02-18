<?php

$host="localhost";
$username="root";
$password="";
$dbname="miniproject";
$conn=mysqli_connect($host,$username,$password,$dbname);


if(isset($_POST['n4'])){
	if(!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['n3'])){
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$query =$conn->prepare("insert into others (other,total,disc11) values(?,?,?)");
		$query->bind_param("iis",$n1,$n2,$n3);
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
		$ins =$conn->prepare("update tab set t12 =(?) where id=19 ");
		$ins->bind_param("i",$n2);
		$ins->execute();
		if($ins){
			
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
	}
	$ins1=$conn->prepare("update tab4 set disc11 =(?) where id=1 ");
		$ins1->bind_param("s",$n3);
		$ins1->execute();
		if($ins1){
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
}
?>
