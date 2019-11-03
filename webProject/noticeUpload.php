<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Notice Upload</title>
		</head>
		<body> 

			
		<form method="POST" action="#">
				<table border="1px" height="35%" width="35%">
					<tr align="center">
						<td colspan="2">Notice Upload</td>
					</tr>
					<tr>
						<td><b>Select Subject: </b></td>
						<td>
							<select name="subject">
						    <option value="Demo">Demo</option>
						    <option value="dataStructure">Data Structure</option>
						    <option value="algorithm">Algorithm</option>
						    <option value="cpp">CPP</option>
						  </select>
						</td>
					</tr>
					<tr>
						<td><b>Select Section: </b></td>
						<td>
							<select name="section">
						    <option value="Demo">Demo</option>
						    <option value="f">F</option>
						    <option value="k">K</option>
						    <option value="a">A</option>
						  </select>
						</td>
					</tr>
					<tr>
						<td><b>Notice Heading:</b> </td>
						<td><input type="text" name="heading"></td>
					</tr>
					<tr>
						<td><b>Write Notice: </b></td>
						<td>
							<textarea name="description"></textarea>
						</td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" name="submit" value="Upload"></td>
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
		if(isset($_POST['submit'])){
			if(($_POST['subject'] == "algorithm") && ($_POST['section'] == "a")){
				$heading = $_POST['heading'];
				$description = $_POST['description'];

				$margeInfo = "#".$heading."|".$description;

				$FI = fopen("algorithm.txt", "a");
				fwrite($FI, $margeInfo);
				fclose($FI);
					
				echo "Upload Success";
			}

			if(($_POST['subject'] == "dataStructure") && ($_POST['section'] == "f")){
				$heading = $_POST['heading'];
				$description = $_POST['description'];

				$margeInfo = "#".$heading."|".$description;

				$FI = fopen("dataStructure.txt", "a");
				fwrite($FI, $margeInfo);
				fclose($FI);
					
				echo "Upload Success";
			}

			if(($_POST['subject'] == "cpp") && ($_POST['section'] == "k")){
				$heading = $_POST['heading'];
				$description = $_POST['description'];

				$margeInfo = "#".$heading."|".$description;

				$FI = fopen("cpp.txt", "a");
				fwrite($FI, $margeInfo);
				fclose($FI);
					
				echo "Upload Success";
			}
		}
	}
	else{
		header("location: signin.php");
	}
?>

