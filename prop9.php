<?php
$host="localhost";
$username="root";
$password="";
$dbname="miniproject";
$conn=mysqli_connect($host,$username,$password,$dbname);


if(isset($_POST['n8'])){
	if(!empty($_POST['n1']) || !empty($_POST['n2'])    || !empty($_POST['n3'])|| !empty($_POST['n4']) || !empty($_POST['n5'])|| !empty($_POST['n6'])|| !empty($_POST['n7'])){
		$n1=$_POST['n1'];
		$n2=$_POST['n2'];
		$n3=$_POST['n3'];
		$n4=$_POST['n4'];
		$n5=$_POST['n5'];
		$n6=$_POST['n6'];
		$n7=$_POST['n7'];
		$query =$conn->prepare("insert into  hospitality (deptmeet,alminvisit,visitguest,parentmeet,bossmeet,total,disc8) values(?,?,?,?,?,?,?)");
		$query->bind_param("iiiiiis",$n1,$n2,$n3,$n4,$n5,$n6,$n7);
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
		$ins =$conn->prepare("update tab set t9 =(?) where id=19 ");
		$ins->bind_param("i",$n6);
		$ins->execute();
		if($ins){
			
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
	}
	$ins1=$conn->prepare("update tab4 set disc8 =(?) where id=1 ");
		$ins1->bind_param("s",$n7);
		$ins1->execute();
		if($ins1){
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
}
?>