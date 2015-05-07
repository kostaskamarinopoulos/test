<!DOCTYPE html>
<html>
	<head>
		<title>Test app - add new event</title>
	</head>
	<body>
		<h1>Add an event</h1>
		<form action="save.php"   method= "POST"> 
			<table>
				<tr>
					<th>Event name</th>
					<td><input type="text" name="name" placeholder="eg Mad for Manchester 2016" style="width:30em;" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"/> </td>
				</tr>
				<tr>
					<th>Start date</th>
					<td><input type="date" name="start" value="<?php echo date('d/m/Y'); ?>"/></td>
				</tr>
				<tr>
					<th>End date</th>
					<td><input type="date" name="end" value="<?php echo date('d/m/Y'); ?>"/></td>
				</tr>
				<tr>
					<th>Number of tickets</th>
					<td><input type="number" name="tickets" placeholder="eg 1000" value="<?php if (isset($_POST['tickets'])) echo $_POST['tickets']; ?>"/> </td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submitbutton" value=" OK " /></td>
				</tr>
			</table>
		</form>
	</body>
</html>
