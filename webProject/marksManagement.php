<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Marks Management</title>
		</head>
		<body>

			
		<form method="POST" action="marksCalculation.php">
				<table border="1px" >
					<tr align="center">
						<td colspan="2">Maraks management</td>
					</tr>
					<tr>
						<td><b>Select Subject: </b></td>
						<td>
							<select name="subject">
							<option value="demo">Demo</option>
						    <option value="dataStructure">DataStructure</option>
						    <option value="algorithm">Algorithm</option>
						    <option value="cpp">CPP</option>
						  </select>
						</td>
					</tr>
					<tr>
						<td><b>Select Section: </b></td>
						<td>
							<select name="section">
						    <option value="demo">Demo</option>
						    <option value="f">F</option>
						    <option value="k">K</option>
						    <option value="a">A</option>
						  </select>
						</td>
					</tr>
					<tr>
						<td><b>Select Term: </b></td>
						<td>
							<select name="term">
							<option value="demo">Demo</option>
						    <option value="mid">Mid</option>
						    <option value="final">Final</option>
						  </select>
						</td>
					</tr>
					
					<tr>
						<td colspan="2"><input type="submit" name="search" value="search"></td>
						
					</tr>
					<tr>
						<td colspan="2">
							
						</td>
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

