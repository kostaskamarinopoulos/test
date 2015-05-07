<?php
	$data = array();
	$file = fopen("records.dat","r");
    $lines = split("\n", file_get_contents($file));
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Test app - list events</title>
	</head>
	<body>
		<table>
			<tr>
				<th>Event name</th>
				<th>Start date</th>
				<th>End date</th>
				<th>Number of tickets</th>
			</tr>
			<tr>
			<?php
			 for($i = 1; $i < 11; $i++){              //loop for the first 10 lines 
	            echo $lines[$i];   
		        $name = $lines[$i]$file[0];
		        $start = $lines[$i]$file[1];
		        $end = $lines[$i]$file[2];
		        $tickets = $lines[$i]$file[3];?>
				
				<td><?php echo $name ?></td>
				<td><?php echo $start ?></td>
				<td><?php echo $end ?></td>
				<td><?php echo $tickets ?></td>
			<?php } ?>
			</tr>
		</table>
	</body>
</html>
