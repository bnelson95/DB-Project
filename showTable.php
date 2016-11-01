<?php
	echo "<table>";
	
	// Add the column header to the table
	$i = 0;
	while ($i < mysql_num_fields($result)) {
		$meta = mysql_fetch_field($result, $i);
		echo "<th>$meta->name</th>";
		$i++;
	}
	
	// Add the rows to the table
	while ($row = mysql_fetch_array($result))
	{
		echo "<tr>";
		
		$i = 0;
		while ($i < mysql_num_fields($result))
		{
			echo "<td>" . $row[$i] . "</td>";
			$i++;
		}
		
		echo "</tr>";
	}
	
	echo "</table>";
?>