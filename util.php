<?php

$host="localhost";
$username="root";
$password="";
$dbname="miniproject";
$conn=mysqli_connect($host,$username,$password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
$sql = "SELECT * FROM tab1,tab5";
$result = $conn->query($sql);
  
$conn->close();
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
                $rows=$result->fetch_assoc();
                
             ?>
        <h1>Utilized Budget</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
			<tr>
                <th>Resources</th>
				<th>Amount</th>
				<th>Description</th>
                
            </tr>

            <tr>
                <th>Software</th>
                <td><?php echo $rows['a1'];?></td>
				<td><?php echo $rows['d'];?></td>
            </tr>
            <tr>
                <th>Equipment</th>
                <td><?php echo $rows['a2'];?></td>
				<td><?php echo $rows['d1'];?></td>
            </tr>
            <tr>
                <th>Library</th>
                <td><?php echo $rows['a3'];?></td>
				<td><?php echo $rows['d2'];?></td>
            </tr>
            <tr>
                <th>Maintenance</th>
                <td><?php echo $rows['a4'];?></td>
				<td><?php echo $rows['d3'];?></td>
            </tr>
            <tr>
                <th>Rennovation/Relocation</th>
                <td><?php echo $rows['a5'];?></td>
				<td><?php echo $rows['d4'];?></td>
            </tr>
            <tr>
                <th>R&D</th>
                <td><?php echo $rows['a6'];?></td>
				<td><?php echo $rows['d5'];?></td>
            </tr>
            <tr>
                <th>Faculty Development</th>
                <td><?php echo $rows['a7'];?></td>
				<td><?php echo $rows['d6'];?></td>
            </tr>
            <tr>
                <th>Student Development</th>
                <td><?php echo $rows['a8'];?></td>
				<td><?php echo $rows['d7'];?></td>
            </tr>
            <tr>
                <th>Hospitality</th>
                <td><?php echo $rows['a9'];?></td>
				<td><?php echo $rows['d8'];?></td>
            </tr>
            <tr>
                <th>Furniture</th>
                <td><?php echo $rows['a10'];?></td>
				<td><?php echo $rows['d9'];?></td>
            </tr>
            <tr>
                <th>Proposal to Central Library</th>
                <td><?php echo $rows['a11'];?></td>
				<td><?php echo $rows['d10'];?></td>
            </tr>
            <tr>
                <th>Any Other Items</th>
                <td><?php echo $rows['a12'];?></td>
				<td><?php echo $rows['d11'];?></td>
            </tr>
            
            
        </table>
    </section>
</body>
 
</html>
