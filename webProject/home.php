<?php
	session_start();
	//if(isset($_SESSION['sessionName']))
	if(isset($_COOKIE['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Home</title>
		</head>
		<body>

			
		<form method="POST" action="#">
				<table border="1px" height="35%" width="35%">
					<tr align="center">
						<td colspan="2">Welcome <?php echo $_SESSION['sessionName']; ?></td>
					</tr>
					<tr>
						<td><a href="myInfo.php"><b>My Info</b></a></td>
						<td><a href="classSchedule.php"><b>Class Schedule</b></a></td>
					</tr>
						<td><a href="accessLibrary.php"><b>Access Library</b></a></td>
						<td><a href="noteUpload.php"><b>Note Upload</b></a></td>
					</tr>
					<tr>
						<td><a href="updateInfo.php"><b>Update Info</b></a></td>
						<td><a href="noticeUpload.php"><b>Notice Upload</b></a></td>
					</tr>
					<tr>
						<td><a href="seeCources.php"><b>See Cources</b></a></td>
						<td><a href="marksManagement.php"><b>Marks Management</b></a></td>
					</tr>
					<tr>
						<!--<td><a href="Home.php"><b>Home</b></a></td>-->
						<td colspan="2"><a href="logout.php"><b>Logout</b></a></td>
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