<?php  
$connect = mysqli_connect("localhost", "root", "", "attmgsystem");
if(isset($_POST["submit"]))
{  
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
    $query = "TRUNCATE TABLE totalinfo";
    mysqli_query($connect, $query);
    $handle = fopen($_FILES['file']['tmp_name'], "r");
    while($data = fgetcsv($handle))
    {
                $item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);
				$item4 = mysqli_real_escape_string($connect, $data[3]);  
                $item5 = mysqli_real_escape_string($connect, $data[4]);
                $item6 = mysqli_real_escape_string($connect, $data[5]);
				$item7 = mysqli_real_escape_string($connect, $data[6]);  
                $item8 = mysqli_real_escape_string($connect, $data[7]);
                $item9 = mysqli_real_escape_string($connect, $data[8]);
				$item10 = mysqli_real_escape_string($connect, $data[9]);  
                $item11= mysqli_real_escape_string($connect, $data[10]);
                $item12= mysqli_real_escape_string($connect, $data[11]);
				$item13= mysqli_real_escape_string($connect, $data[12]);
				$item14= mysqli_real_escape_string($connect, $data[13]);
				$item15= mysqli_real_escape_string($connect, $data[14]);
                $query1 = "INSERT into totalinfo(id,name,wt,se,mpi,etc,wtlab,miniproj,dat,spa,cis,ensa,total,tclass,percentage) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item14')";
                mysqli_query($connect, $query1);
    }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Allocate_amount</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style>
    body{
      background-image: url('bg1.jpg');
      background-size: cover;
    }
      .center{
        position: absolute;
        top: 40%;
        left: 40%;
        margin: -25px 0 0 -25px; 
      }
    </style>
 </head>  
 <body>  
  <form method="post" enctype="multipart/form-data">
   <div class="center" align="center">  
    <label>Select CSV File:</label>
    <input type="file" name="file" />
    <br />
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
 </body>  
</html>