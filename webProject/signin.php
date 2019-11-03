<?php
	session_start();
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Signin</title>
	</head>
	<body>

		
	<form method="POST" action="#">
			<table>
				<tr>
					<td><b>Username:</b></td>
					<td><input type="text" name="username"></td>
				</tr>

				<tr>
					<td><b>Password:</b></td>
					<td><input type="Password" name="password"></td>
				</tr>

				<tr>
					<td><input type="submit" name="submit" value="SignIn"></td>
					<td><a href="signup.PHP">Register</a></td>
				</tr>
			</table>
		</form>
	</body>
	</html>


<?php
	$check = 0;
	if(isset($_POST['submit'])){
		if($_POST['username'] == null || $_POST['password'] == null){
			echo "Give Info PLZ.";
		}
		else{
			$FI = fopen("signin.txt", "r");
			$users = explode("#", fgets($FI));
			//print_r($idpass);
			fclose($FI);

			$usersSize = count($users);
			for($i = 0; $i < $usersSize; $i++){
				$user = explode("|", $users[$i]);
				$userSize = count($user);
				
				if(($user[0] == $_POST['username']) && ($user[7] == $_POST['password']) && 
					($user[9] == "teacher")){
					$_SESSION['sessionName'] = $user[0];
					$_SESSION['sessionPass'] = $user[7];
					
					$_SESSION['bscMajor'] = $user[1];
					$_SESSION['mscMajor'] = $user[2];
					$_SESSION['researchTopic'] = $user[3];
					$_SESSION['address'] = $user[4];
					$_SESSION['email'] = $user[5];
					$_SESSION['phone'] = $user[6];

					setcookie("sessionName", $user[0], time()+3600, "/");
					$check = 1;

					
					/*for($j = 0; $j < $userSize; $j++){
						$name = "cookieData".$j;
						$_SESSION[$name] = $user[$j];
						
						setcookie("bscMajor", $user[1], time()+3600, "/");
						setcookie("mscMajor", $user[2], time()+3600, "/");
						setcookie("researchTopic", $user[3], time()+3600, "/");
						setcookie("address", $user[4], time()+3600, "/");
						setcookie("email", $user[5], time()+3600, "/");
						setcookie("phone", $user[6], time()+3600, "/");
						setcookie("type", $user[9], time()+3600, "/");/
						if(isset($_COOKIE['cookieData0'])){
							echo "OKAY123 ".$_COOKIE['cookieData0'];
						}

					}*/
					header("location: home.php");
				} 
				
			}
			
			if($check == 0){
				echo "Invalid ID/PASS!";
			}

		}
	}

?>

