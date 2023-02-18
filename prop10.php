<?php

$host="localhost";
$username="root";
$password="";
$dbname="miniproject";
$conn=mysqli_connect($host,$username,$password,$dbname);


if(isset($_POST['n6'])){
	if(!empty($_POST['n1']) && !empty($_POST['n2']) && !empty($_POST['n3'])&& !empty($_POST['n4'])&& !empty($_POST['n5'])){
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$n4=$_POST['n4'];
		$n5=$_POST['n5'];
		$query =$conn->prepare("insert into furniture (lab,office,classroom,total,disc9) values(?,?,?,?,?)");
		$query->bind_param("iiiis",$n1,$n2,$n3,$n4,$n5);
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
		$ins =$conn->prepare("update tab set t10 =(?) where id=19 ");
		$ins->bind_param("i",$n4);
		$ins->execute();
		if($ins){
			
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
	}
	$ins1=$conn->prepare("update tab4 set disc9 =(?) where id=1 ");
		$ins1->bind_param("s",$n5);
		$ins1->execute();
		if($ins1){
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
}
?>