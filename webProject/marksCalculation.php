<?php 
	session_start();
	if(isset($_SESSION['sessionName'])){
		if( (isset($_POST['subject'])) && (isset($_POST['section'])) && (isset($_POST['term']))){

			?>
			<!DOCTYPE html>
			<html>
			<head>
				<title>Marks Calculation</title>
			</head>
			<body>
				<form method="POST" action="marksUpdate.php">
						<table border="1px">
							<tr align="center">
								<td colspan="7">Marks management</td>
							</tr>
							<tr align="center">
								<!--**********************KHELA HOBE***********************************-->
								<td colspan="7"><b><?php
									if( ($_POST['subject'] == 'algorithm') && ($_POST['section'] == 'a') ){
										if(($_POST['term'] == 'mid')){
											?>[MID]Algorithm[A] mon:03:00-05:00am tues:02:00-05:00pm<?php
										}
										else{
											?>[FINAL]Algorithm[A] mon:03:00-05:00am tues:02:00-05:00pm<?php
										}
									
									}
									else if( ($_POST['subject'] == 'cpp') && ($_POST['section'] == 'k') ){
										if(($_POST['term'] == 'mid')){
											?>[MID]CPP[K] mon:08:00-10:00am wed:11:00-02:00pm<?php
										}
										else{
											?>[FINAL]CPP[K] mon:08:00-10:00am wed:11:00-02:00pm<?php
										}
									}
									else if( ($_POST['subject'] == 'dataStructure') && ($_POST['section'] == 'f') ){
										
										if(($_POST['term'] == 'mid')){
											?>[MID]Data Structure[F] sun:08:00-10:00am tues:11:00-02:00pm<?php
										}
										else{
											?>[FINAL]Data Structure[F] sun:08:00-10:00am tues:11:00-02:00pm<?php
										}
									}
									else{
										echo "Section Cource Mismatch!";
										goto end;
									}
									?></b>
								</td>
							</tr>
							<tr>
								<td><b>Serial No</b></td>
								<td><b>ID</b></td>
								<td><b>Name</b></td>
								<td><b>Quizes</b></td>
								<td><b>Assignment</b></td>
								<td><b>Term</b></td>
								<td><b>Total</b></td>
							</tr>

							<?php
							//***********************KHELA HOBE****************************************
							if( ($_POST['subject'] == 'algorithm') && ($_POST['section'] == 'a') && ($_POST['term'] == 'mid') ){
									$_SESSION['subjetName'] = $_POST['subject'];
									$_SESSION['sectionName'] = $_POST['section'];
									$_SESSION['termName'] = $_POST['term'];
									$url = "Marks/algorithm/mid.txt";
								}

								else if( ($_POST['subject'] == 'algorithm') && ($_POST['section'] == 'a') && ($_POST['term'] == 'final') ){
									$_SESSION['subjetName'] = $_POST['subject'];
									$_SESSION['sectionName'] = $_POST['section'];
									$_SESSION['termName'] = $_POST['term'];
									$url = "Marks/algorithm/final.txt";
								}
								else if( ($_POST['subject'] == 'dataStructure') && ($_POST['section'] == 'f') && ($_POST['term'] == 'mid') ){
									$_SESSION['subjetName'] = $_POST['subject'];
									$_SESSION['sectionName'] = $_POST['section'];
									$_SESSION['termName'] = $_POST['term'];
									$url = "Marks/dataStructure/mid.txt";
								}
								else if( ($_POST['subject'] == 'dataStructure') && ($_POST['section'] == 'f') && ($_POST['term'] == 'final') ){
									$_SESSION['subjetName'] = $_POST['subject'];
									$_SESSION['sectionName'] = $_POST['section'];
									$_SESSION['termName'] = $_POST['term'];
									$url = "Marks/dataStructure/final.txt";
								}
								else if( ($_POST['subject'] == 'cpp') && ($_POST['section'] == 'k') && ($_POST['term'] == 'mid') ){
									$_SESSION['subjetName'] = $_POST['subject'];
									$_SESSION['sectionName'] = $_POST['section'];
									$_SESSION['termName'] = $_POST['term'];
									$url = "Marks/cpp/mid.txt";
								}
								else if( ($_POST['subject'] == 'cpp') && ($_POST['section'] == 'k') && ($_POST['term'] == 'final') ){
									$_SESSION['subjetName'] = $_POST['subject'];
									$_SESSION['sectionName'] = $_POST['section'];
									$_SESSION['termName'] = $_POST['term'];
									$url = "Marks/cpp/final.txt";
								}
								else{
									echo "Invalid Info!!!!";
								}
							$FI = fopen( $url , "r");
							$users = explode("#", fgets($FI));
							fclose($FI);

							$usersSize = count($users);

							For($i = 0; $i < 40; $i++){
								$user = explode("|", $users[$i+1]);
								$userSize = count($user);
								?>
							<tr>
								<td><?php echo $i+1; ?></td>
								<td>17-3369<?php echo $i; ?>-1</td>
								<td>Abdul Rahim</td>
								<td><input type="text" name=<?php echo "user".$i."0"; ?> value=<?php echo $user[0]; ?> > </td>
								<td><input type="text" name=<?php echo "user".$i."1"; ?> value=<?php echo $user[1]; ?>></td>
								<td><input type="text" name=<?php echo "user".$i."2"; ?> value=<?php echo $user[2]; ?>></td>
								<td><input type="text" name=<?php echo "user".$i."3"; ?> value=<?php echo $user[3]; ?>></td>
							</tr>
							<?php
							}

							 ?>

							 <tr>
							 	<td colspan="7"> <input type="submit" name="submit" value="submit"> </td>
							 </tr>
							 <tr>
								<td><a href="Home.php"><b>Home</b></a></td>
								<td colspan="5"></td>
								<td><a href="logout.php"><b>Logout</b></a></td>
							</tr>

						</table>
					</form>
			</body>
			</html>
	<?php
		}
		else{
			end:
			header("location: marksManagement.php");

		}
	
	}
	else{
		header("location: signin.php");
	}
?>


	
<?php
/*
			//Algorithm
			if( ($_POST['subject'] == 'algorithm') && ($_POST['section'] == 'a') && ($_POST['term'] == 'mid') ){
				"Marks/algorithm/mid.txt", "r"
			}

			else if( ($_POST['subject'] == 'algorithm') && ($_POST['section'] == 'a') && ($_POST['term'] == 'final') ){
				"Marks/algorithm/final.txt", "r"
			}
			else if( ($_POST['subject'] == 'dataStructure') && ($_POST['section'] == 'f') && ($_POST['term'] == 'mid') ){
				"Marks/dataStructure/mid.txt", "r"
			}
			else if( ($_POST['subject'] == 'dataStructure') && ($_POST['section'] == 'f') && ($_POST['term'] == 'final') ){
				"Marks/dataStructure/final.txt", "r"
			}
			else if( ($_POST['subject'] == 'cpp') && ($_POST['section'] == 'k') && ($_POST['term'] == 'mid') ){
				"Marks/cpp/mid.txt", "r"
			}
			else if( ($_POST['subject'] == 'cpp') && ($_POST['section'] == 'k') && ($_POST['term'] == 'final') ){
				"Marks/cpp/final.txt", "r"
			}

*/


?>

