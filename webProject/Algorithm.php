<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Subject: Algorithm[A]</title>
		</head>
		<body>

			
		<form method="POST" action="#">
				<table border="1px">
					<tr align="center">
						<td colspan="6"><h2>Algorithm[A] mon:03:00-05:00am tues:02:00-05:00pm</h2></td>
					</tr>
					<tr>
						<td>Serial No</td>
						<td>Id</td>
						<td>Name</td>
						<td>Mid</td>
						<td>Final</td>
						<td>Total</td>
					</tr>

					<?php
					$FI = fopen( "Marks/algorithm/mid.txt" , "r");
					$usersAM = explode("#", fgets($FI));
					fclose($FI);
					$userM = 0;

					$FI = fopen( "Marks/algorithm/final.txt" , "r");
					$usersAF = explode("#", fgets($FI));
					fclose($FI);
					$userF = 0;
						
					For($i = 0; $i < 40; $i++){
						?>

						<tr>
							<td><?php echo $i+1; ?></td>
							<td>17-33698-1</td>
							<td>Abdul Karim</td>
							<td><?php
								$user = explode("|", $usersAM[$i+1]);
								$userM = $user[3];
							 	echo $userM;
							 ?></td>
							<td><?php
								$user = explode("|", $usersAF[$i+1]);
								$userF = $user[3];
							 	echo $userF;
							 ?></td>
							<td><?php 
								$mid = $userM * 0.4;
								$final = $userF * 0.6;
								$total = $mid + $final;
								echo $total;
							 ?></td>	
						</tr>
						<?php
					}

					 ?>
				</table>
			</form>
			<!--NOTICE UPLOAD-->
			<p>
			<h2>Notices: </h2>
			<?php 

				$FI = fopen("algorithm.txt", "r");
				$users = explode("#", fgets($FI));
				fclose($FI);

				$usersSize = count($users);
				for($i = 1; $i < $usersSize; $i++){
					$user = explode("|", $users[$i]);
					
					?> <b> <?php echo  $user[0]; ?> </b> <br> <?php
					echo $user[1]; ?> <br><br><?php
				}

			?>
			</p>

			<!--NOTE UPLOAD-->
			<p>
			<h2>Notes: </h2>
			<?php 

				$FI = fopen("algorithm/algorithm.txt", "r");
				$users = explode("|", fgets($FI));
				fclose($FI);

				$usersSize = count($users);
				for($i = 0; $i < $usersSize; $i++){
					?> <b> <?php echo  $users[$i]; ?> </b><br><br><?php
				}

			?>
			</p>
			<pre><a href="Home.php"><b>Home</b></a>                                                             <a href="logout.php"><b>Logout</b></a></pre>
		</body>
		</html>
		<?php
	
	}
	else{
		header("location: signin.php");
	}
?>