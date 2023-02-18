<!DOCTYPE html>
<html>

<body>
	<center>
		<h1>DISPLAY DATA PRESENT IN CSV</h1>
		<h3>Student data</h3>

		<?php
		echo "<html><body><center><table>\n\n";

		// Open a file
		$file = fopen("data.csv - Sheet1.csv", "r");

		// Fetching data from csv file row by row
		while (($data = fgetcsv($file)) !== false) {

			// HTML tag for placing in row format
			echo "<tr>";
			foreach ($data as $i) {
				echo "<td>" . htmlspecialchars($i)
					. "</td>";
			}
			echo "</tr> \n";
		}

		// Closing the file
		fclose($file);

		echo "\n</table></center></body></html>";
		?>
	</center>
</body>

</html>
