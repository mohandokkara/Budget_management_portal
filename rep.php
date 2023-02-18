<?php

$host="localhost";
$username="root";
$password="";
$dbname="miniproject";
$conn=mysqli_connect($host,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
$sql = "SELECT * FROM tab1,tab3 where tab1.id = tab3.id ";
 $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>GFG User Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT',
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
	
    </style>
	
</head>
 
<body>
    <section>
    <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc() )
                {
					
             ?>
        <!-- TABLE CONSTRUCTION-->
		<h1>Final Report</h1>
        <table>
			<tr>
                <th>Resources</th>
				<th>Allocated</th>
                <th>Utilized</th>
				<th>Remaining Balance</th>
				


            </tr>
			
            <tr>
                <th>Software</th>
				<td><?php echo $rows['t1'];?></td>
				<td><?php echo $rows['a1'];?></td>
				<td><?php echo $rows['t1']-$rows['a1'];?></td>
				


            </tr>
            <tr>
                <th>Equipment</th>
				<td><?php echo $rows['t2'];?></td>
				<td><?php echo $rows['a2'];?></td>
				<td><?php echo $rows['t2']-$rows['a2'];?></td>
				

				
            </tr>
            <tr>
                <th>Library</th>
				<td><?php echo $rows['t3'];?></td>
				<td><?php echo $rows['a3'];?></td>                
				<td><?php echo $rows['t3']-$rows['a3'];?></td>
				

				
            </tr>
            <tr>
                <th>Maintenance</th>
				<td><?php echo $rows['t4'];?></td>
				<td><?php echo $rows['a4'];?></td>               
				<td><?php echo $rows['t4']-$rows['a4'];?></td>
				

				
            </tr>
            <tr>
                <th>Rennovation/Relocation</th>
				<td><?php echo $rows['t5'];?></td>
				<td><?php echo $rows['a5'];?></td>               
				<td><?php echo $rows['t5']-$rows['a5'];?></td>
				

				
            </tr>
            <tr>
                <th>R&D</th>
				<td><?php echo $rows['t6'];?></td>
				<td><?php echo $rows['a6'];?></td>
				<td><?php echo $rows['t6']-$rows['a6'];?></td>
				

				
            </tr>
            <tr>
                <th>Faculty Development</th>
				<td><?php echo $rows['t7'];?></td>
				<td><?php echo $rows['a7'];?></td>
				<td><?php echo $rows['t7']-$rows['a7'];?></td>
				

				
            </tr>
            <tr>
                <th>Student Development</th>
				<td><?php echo $rows['t8'];?></td>
				<td><?php echo $rows['a8'];?></td>               
				<td><?php echo $rows['t8']-$rows['a8'];?></td>
				

				
            </tr>
            <tr>
                <th>Hospitality</th>
				 <td><?php echo $rows['t9'];?></td>
				<td><?php echo $rows['a9'];?></td>               
				<td><?php echo $rows['t9']-$rows['a9'];?></td>
				

				
            </tr>
            <tr>
                <th>Furniture</th>
				<td><?php echo $rows['t10'];?></td>
				<td><?php echo $rows['a10'];?></td>                
				<td><?php echo $rows['t10']-$rows['a10'];?></td>
				

				
            </tr>
            <tr>
                <th>Proposal to Central Library</th>
				 <td><?php echo $rows['t11'];?></td>
				<td><?php echo $rows['a11'];?></td>              
				<td><?php echo $rows['t11']-$rows['a11'];?></td>
				

				
            </tr>
            <tr>
                <th>Any Other Items</th>
				<td><?php echo $rows['t12'];?></td>
				<td><?php echo $rows['a12'];?></td>                
				<td><?php echo $rows['t12']-$rows['a12'];?></td>
				

				
            </tr>
            
            <?php
                }
             ?>
        </table>
    </section>
	 
</body>
 
</html>
