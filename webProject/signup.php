<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<form method="POST" action="#">
		<table>
			<tr>
				<td><b>Username:</b></td>
				<td><input type="text" name="username"></td>
			</tr>

			<tr>
				<td><b>Bsc major:</b></td>
				<td><input type="text" name="bscMajor"></td>
			</tr>
			<tr>
				<td><b>Msc major:</b></td>
				<td><input type="text" name="mscMajor"></td>
			</tr>
			<tr>
				<td><b>Research Topic:</b></td>
				<td><input type="text" name="researchTopic"></td>
			</tr>
			<tr>
				<td><b>Address:</b></td>
				<td><input type="text" name="address"></td>
			</tr>
			<tr>
				<td><b>Email:</b></td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td><b>Phone:</b></td>
				<td><input type="text" name="phone"></td>
			</tr>
			<tr>
				<td><b>Password:</b></td>
				<td><input type="Password" name="password"></td>
			</tr>
			
			<tr>
				<td><b>Confirm Password:</b></td>
				<td><input type="Password" name="confirmPassword"></td>
			</tr>
			<tr>
					<td><b>User type:</b></td>
					<td>
						<input type="radio" name="type" value="admin"/> <b>Admin</b>
						<input type="radio" name="type" value="student"/> <b>Student<b>
						<input type="radio" name="type" value="teacher"/> <b>Teacher</b></b>
						
					</td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="Signup"></td>
				<td><a href="signin.php">Signin</a></td>
			</tr>
		</table>
	</form>

</body>
</html>



<?php
	if(isset($_POST['submit'])){
		

		if((empty($_POST['username']) == true) || (empty($_POST['bscMajor'])== true) ||
			(empty($_POST['mscMajor']) == true) || (empty($_POST['researchTopic']) == true) ||
			(empty($_POST['address']) == true) || (empty($_POST['email']) == true) ||
			(empty($_POST['phone']) == true) || (empty($_POST['password']) == true) ||
			(empty($_POST['confirmPassword']) == true) || (empty($_POST['type']) == true)){
			echo "Give All Info PLZ.";
		}
		else{
			$username = $_POST['username'];
			$bscMajor = $_POST['bscMajor'];
			$mscMajor = $_POST['mscMajor'];
			$researchTopic = $_POST['researchTopic'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['confirmPassword'];
			$type = $_POST['type'];
			
			if(($password != $confirmPassword)){
				echo "Password mismatch!!!!!";
			}
			else{
				$allInfoOfUser = "#".$username."|".$bscMajor."|".$mscMajor."|".$researchTopic."|".$address."|".$email
				."|".$phone."|".$password."|".$confirmPassword."|".$type;
				

				$FI = fopen("signin.txt", "a");
				fwrite($FI, $allInfoOfUser);
				fclose($FI);
				
				
				
				
				echo "Signup Completed!";
			}
		}
	}

?>

