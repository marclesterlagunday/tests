<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table border="1">
	<tr>
		<th>Name</th>
		<th>Continent</th>
		<th>Region</th>
		<th>Surface Area</th>
		<th>Population</th>
	</tr>
	<?php
		$conn = @mysqli_connect('localhost', 'root', '', 'world');

		$sql = "SELECT * FROM `country`;";
		$query = mysqli_query($conn, $sql);

		while ($row = mysqli_fetch_array($query)) {
			echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Continent']."</td>";
			echo "<td>".$row['Region']."</td>";
			echo "<td>".$row['SurfaceArea']."</td>";
			echo "<td>".$row['Population']."</td>";
			echo "</tr>";
		}
	?>
</table>

</body>
</html>