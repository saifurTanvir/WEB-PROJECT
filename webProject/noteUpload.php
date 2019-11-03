<?php
	session_start();
	if(isset($_SESSION['sessionName'])){
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Note upload</title>
		<body>

			
		<form method="POST" action="#" enctype="multipart/form-data">
				<table border="1px" height="35%" width="35%">
					<tr align="center">
						<td colspan="2">Note Upload</td>
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
						<td><b>Select Note: </b></td>
						<td>
							<input type="file" name="file">
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
		if((isset($_POST['submit']))){
			$subject = $_POST['subject'];
			$Section = $_POST['section'];
			if((isset($subject)) && (isset($Section))){

				if(($subject == 'algorithm') && ($Section == 'a')){
					$file = $_FILES['file'];
					$fileName = $_FILES['file']['name'];
					$fileType = $_FILES['file']['type'];
					$tmpName = $_FILES['file']['tmp_name'];
					$fileStore = "algorithm/".$fileName;
					if(move_uploaded_file($tmpName, $fileStore)){
						echo "Uploaded successfully!";
					}
					$FI = fopen("algorithm/algorithm.txt", "a");
					fwrite($FI, $fileName."|");
					fclose($FI);
				}
				if(($subject == 'dataStructure') && ($Section == 'f')){
					$file = $_FILES['file'];
					$fileName = $_FILES['file']['name'];
					$fileType = $_FILES['file']['type'];
					$tmpName = $_FILES['file']['tmp_name'];
					$fileStore = "dataStructure/".$fileName;
					if(move_uploaded_file($tmpName, $fileStore)){
						echo "Uploaded successfully!";
					}
					$FI = fopen("dataStructure/dataStructure.txt", "a");
					fwrite($FI, $fileName."|");
					fclose($FI);
				}
				if(($subject == 'cpp') && ($Section == 'k')){
					$file = $_FILES['file'];
					$fileName = $_FILES['file']['name'];
					$fileType = $_FILES['file']['type'];
					$tmpName = $_FILES['file']['tmp_name'];
					$fileStore = "cpp/".$fileName;
					if(move_uploaded_file($tmpName, $fileStore)){
						echo "Uploaded successfully!";
					}
					$FI = fopen("cpp/cpp.txt", "a");
					fwrite($FI, $fileName."|");
					fclose($FI);
				}
			}
			else{
				echo "Give All Info PLZ";
			}
			
		}

	}
	else{
		header("location: signin.php");
	}
?>

