<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Signin</title>
		</head>
		<body>

			
		<form method="POST" action="#">
				<table border="1px">
					<tr>
						<td colspan="2" align="center"><b>Update Info</b></td>
					</tr>
					<tr>
						<td><b>Current Password:</b></td>
						<td><input type="Password" name="currentPassword"></td>
					</tr>

					<tr>
						<td><b>New Password:</b></td>
						<td><input type="Password" name="newPassword"></td>
					</tr>

					<tr>
						<td><b>Confirm New Password:</b></td>
						<td><input type="Password" name="confirmNewPassword"></td>
					</tr>

					<tr>
						<td><input type="submit" name="submit" value="submit"></td>
						<td align="right"><a href="home.php"><b>Home</b></a></td>
					</tr>
				</table>
			</form>
		</body>
		</html>
		<?php
		if( isset($_POST['submit']) ){
			if(isset($_POST['currentPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmNewPassword']) ){
				if(($_POST['currentPassword']) == ($_SESSION['sessionPass'])){
					if(($_POST['newPassword']) == ($_POST['confirmNewPassword'])){
						//********Khela Start Hobe**************
						$FI = fopen("signin.txt", "r");
						$users = explode("#", fgets($FI));
						fclose($FI);

						$usersSize = count($users);
						$margeData = null;
						for($i = 1; $i < $usersSize; $i++){
							$user = explode("|", $users[$i]);

							if((($_POST['currentPassword'] == $user[7]) && ($_SESSION['sessionName'] == $user[0]) )){
								$margeData = $margeData."#".$user[0]."|".$user[1]."|".$user[2]."|".$user[3]."|".$user[4]."|".$user[5]."|".$user[6]."|".$_POST['newPassword']."|".$user[8]."|".$user[9];
									//echo $margeData;
								}
							else{
								$margeData = $margeData."#".$user[0]."|".$user[1]."|".$user[2]."|".$user[3]."|".$user[4]."|".$user[5]."|".$user[6]."|".$user[7]."|".$user[8]."|".$user[9];
							}
						}
						$FI = fopen("signin.txt", "w");
						fwrite($FI, $margeData);
						fclose($FI);
						echo "Password upadete Succussfull.";
					}
				}
			}
				

		}
		
			
	}
		


else{
	header("location: signin.php");
}
	
?>