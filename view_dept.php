<?php
	require("mysqli_connect.php");

		$q = "SELECT dept_name, dept_no FROM departments ORDER BY dept_no ASC";

		$r = @mysqli_query($dbc, $q);

		$num = mysqli_num_rows($r);

		if($num > 0) {
		echo "<p>In our company there are $num departments.</p>";
		echo "<table border='1'>
			<tr>
				<td><strong>Department</strong></td>
				<td><strong>Department Number</strong></td>
			</tr>
			";
	
		while($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo 
		"<tr>
			<td>".$row['dept_name']."</td>
			<td>".$row['dept_no']."</td>
		</tr>";
	}
	echo "</table>";
} else {
	echo "<p>There are no departments in our company.</p>";
}
?>
