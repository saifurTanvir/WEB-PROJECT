<?php
	session_start();
		if(isset($_POST['submit'])){
			$margeData = null;
			
			
				For($i = 0; $i < 40; $i++){
				
				$indexFormat0 = "user".$i."0";
				$indexFormat1 = "user".$i."1";
				$indexFormat2 = "user".$i."2";
				$indexFormat3 = "user".$i."3";

				$margeData = $margeData."#".$_POST[$indexFormat0]."|".$_POST[$indexFormat1]."|".$_POST[$indexFormat2]."|".$_POST[$indexFormat3];
				}
				
				//*********************************KHELA HOBE****************************************
				//Algorithm
				if( ($_SESSION['subjetName'] == 'algorithm') && ($_SESSION['sectionName'] == 'a') && ($_SESSION['termName'] == 'mid') ){
					$FI = fopen("Marks/algorithm/mid.txt", "w");
					fwrite($FI, $margeData);
					fclose($FI);
					

				}

				else if( ($_SESSION['subjetName'] == 'algorithm') && ($_SESSION['sectionName'] == 'a') && ($_SESSION['termName'] == 'final') ){
					$FI = fopen("Marks/algorithm/final.txt", "w");
					fwrite($FI, $margeData);
					fclose($FI);
					
				} 

				else if( ($_SESSION['subjetName'] == 'cpp') && ($_SESSION['sectionName'] == 'k') && ($_SESSION['termName'] == 'mid') ){
					$FI = fopen("Marks/cpp/mid.txt", "w");
					fwrite($FI, $margeData);
					fclose($FI);
					
				} 
				else if( ($_SESSION['subjetName'] == 'cpp') && ($_SESSION['sectionName'] == 'k') && ($_SESSION['termName'] == 'final') ){
					$FI = fopen("Marks/cpp/final.txt", "w");
					fwrite($FI, $margeData);
					fclose($FI);
					
				} 
				else if( ($_SESSION['subjetName'] == 'dataStructure') && ($_SESSION['sectionName'] == 'f') && ($_SESSION['termName'] == 'mid') ){
					$FI = fopen("Marks/dataStructure/mid.txt", "w");
					fwrite($FI, $margeData);
					fclose($FI);
					
				} 
				else if( ($_SESSION['subjetName'] == 'dataStructure') && ($_SESSION['sectionName'] == 'f') && ($_SESSION['termName'] == 'final') ){
					$FI = fopen("Marks/dataStructure/final.txt", "w");
					fwrite($FI, $margeData);
					fclose($FI);
					
				} 
				?> 
				<table border="1px">
					<tr>
						<td colspan="2"><b>Update Successfully</b></td>
					</tr>
					<tr>
						<td><a href="Home.php"><b>Home</b></a></td>
						
						<td><a href="logout.php"><b>Logout</b></a></td>
					</tr>
				</table>
				<?php
		
				
			
		}
		else{
			header("location: marksCalculation.php");
		}
	?>