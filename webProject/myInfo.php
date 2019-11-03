<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>My Info</title>
		</head>
		<body>

			
		<form method="POST" action="#">
				<table border="1px" height="35%" width="35%">
					<tr align="center">
						<td colspan="2"><?php echo $_SESSION['sessionName']; ?>'s Info</td>
					</tr>
					<tr>
						<td>Name: </td>
						<td><?php echo $_SESSION['sessionName']; ?></td>
					</tr>
					<tr>
						<td>Id: </td>
						<td>11-52648-1</td>
					</tr>
					<tr>
						<td>Designation: </td>
						<td>Assistant Professor</td>
					</tr>
					<tr>
						<td>Salary: </td>
						<td>75000(TK)</td>  
					</tr>
					<tr>
						<td>Bsc major: </td>
						<td><?php echo $_SESSION['bscMajor']; ?></td>
					</tr>
					<tr>
						<td>Msc Major: </td>
						<td><?php echo $_SESSION['mscMajor']; ?></td>
					</tr>
					<tr>
						<td>Research Topic: </td>
						<td><?php echo $_SESSION['researchTopic']; ?></td>
					</tr>
					<tr>
						<td>Address: </td>
						<td><?php echo $_SESSION['address']; ?></td>
					</tr>
					<tr>
						<td>Mobile no.: </td>
						<td><?php echo $_SESSION['phone']; ?></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><?php echo $_SESSION['email']; ?></td>
					</tr>
					<tr>
						<td><a href="Home.php"><b>Home</b></a></td>
						<td><a href="logout.php"><b>Logout</b></a></td>
					</tr>

					
				</table>
			</form>
		</body>
		</html>
		<?php
	
	}
	else{
		header("location: signin.php");
	}
?>