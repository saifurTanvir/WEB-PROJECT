<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Access Library</title>
		</head>
		<body>

			
		<form method="POST" action="#">
				<table border="1px" height="35%" width="35%">
					<tr align="center">
						<td colspan="2">Access Library</td>
					</tr>
					<tr>
						<td><b>Book Borrowed: </b></td>
						<td>
							<ol>
								<li>Programming In ANSI C By Balagurusamy</li>
								<li>The Edge Of Physics By Anathaswamy</li>
								<li>Data Structure By Lipschutz</li>
							</ol>
						</td>
					</tr>
					<tr>
						<td><b>Book Available: </b></td>
						<td>
							<ol>
								<li>The Pragmatic Programmer: From Journeyman to Master</li>
								<li>Clean Code: A Handbook of Agile Software Craftsmanship</li>
								<li>Code Complete</li>
								<li>Design Patterns: Elements of Reusable Object-Oriented Software</li>
								<li>Refactoring: Improving the Design of Existing Code</li>
								<li>The Mythical Man-Month: Essays on Software Engineering</li>
							</ol>
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