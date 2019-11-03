<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Class Schedule</title>
		</head>
		<body>

			
		<form method="POST" action="#">
				<table border="1px" width="20%">
					<tr align="center">
						<td ><b>Class Schedule</b></td>
					</tr>
					<tr >
						<td align="left">
							<pre><b>Today:</b>
							<b>Subject: </b>Data Structure[F]
							<b>Time:</b> sun:08:00-10:00am
							      tues:02:00-05:00pm
							<b>Room:</b> 3201</pre>
							<pre>   
									
							<b>Subject: </b>Algorithm[A]
							<b>Time:</b> mon:03:00-05:00am
							      wed:02:00-05:00pm	 
							<b>Room:</b> 3201
							</pre>
						</td>
					</tr>
					<tr>
						<td>
							<pre><b>Tomorrow:</b>
							<b>Subject: </b>CPP[K]
							<b>Time:</b> mon:08:00-10:00am
							      wed:11:00-02:00pm
							<b>Room:</b> 3201</pre>
						</td>
					</tr>
					<tr>
						<!-- <td><a href="Home.php"><b>Home</b></a></td> -->
						<td>
						<pre> <a href="Home.php"><b>Home</b></a>                                                                      <a href="logout.php"><b>Logout</b></a></pre>
						</td>
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