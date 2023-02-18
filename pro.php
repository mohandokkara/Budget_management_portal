<?php

$host="localhost";
$username="root";
$password="";
$dbname="miniproject";
$conn=mysqli_connect($host,$username,$password,$dbname);


if(isset($_POST['submit'])){
	if(!empty($_POST['number']) && !empty($_POST['number1']) && !empty($_POST['number2'])&& !empty($_POST['text'])){
		$number=$_POST['number'];
		$number1=$_POST['number1'];
		$number2=$_POST['number2'];
		$text=$_POST['text'];
		$query =$conn->prepare("insert into softwares (lab,deptoffice,total,disc) values(?,?,?,?)");
		$query->bind_param("iiis",$number,$number1,$number2,$text);
		$query->execute();
		if($query){
			echo "form submitted successfully";		
		}
		else{
			echo "form not submitted";
		}
	}	
	else{echo "All field are required";}

		$ins =$conn->prepare("update tab set t1 =(?) where id=19 ");
		$ins->bind_param("i",$number2);
		$ins->execute();
		if($ins){
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
	
		$ins1=$conn->prepare("update tab4 set disc =(?) where id=1 ");
		$ins1->bind_param("s",$text);
		$ins1->execute();
		if($ins1){
			echo "form submitted successfully";
		}
		else{
			echo "form not submitted";
		}
	
}
?>