<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Students Info</title>
	</head>
	<body>
		<table border="1px">
			<tr>
				<td align="center" colspan="2"><h3>Student Info</h3></td>
			</tr>
			<tr>
				<td  colspan="2"><a href="dataStructure.php"><b>Data Structure[F]</b></a></td>
			</tr>
			<tr>
				<td colspan="2"><a href="cpp.php"><b>CPP[K]</b></a></td>
			</tr>
			<tr>
				<td colspan="2"><a href="algorithm.php"><b>Algorithm[A]</b></a></td>
			</tr>
			<tr>
				<td><a href="Home.php"><b>Home</b></a></td>
				<td><a href="logout.php"><b>Logout</b></a></td>
			</tr>
		</table>

	</body>
	</html>
	<?php
	}
	else{
		header("location: signin.php");
	}
?>
