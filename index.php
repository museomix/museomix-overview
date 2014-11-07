<html>
	<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
		<SCRIPT LANGUAGE="JavaScript" SRC="js/jquery.js"></SCRIPT>
		<link rel="stylesheet" type="text/css" href="drunken_style.css">
		<SCRIPT LANGUAGE="JavaScript" SRC="js/core.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" SRC="js/JSTweener.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" SRC="js/Team.js"></SCRIPT>
	</head>
	<body>
		<div class="main">
			<div><a href="http://www.clevberger.com/museomix/overview.php">Go to overview</a></div>
			<div>
			<?php
				
				$userId = $_GET["userId"];
				
				for ($x=1; $x<=7; $x++) {
					if (isset($_POST["value$x"])){

		  				$file = "teamData/teamData/team$userId/item$x.txt";	
						file_put_contents($file, $_POST["value$x"],  LOCK_EX);
	   				}
					$titelValue = file_get_contents("teamData/Titles/Title$x.txt");
		 			$itemVal = file_get_contents("teamData/teamData/team$userId/item$x.txt");
		 				
					if($x==5){
 						echo "	
		 				 	<div class='hexagon hex$x'>
								<img src='assets/hexx$x.png' class='hexImg'></img>
								<div><form id='form$x' method='post' class='hexInputName'>
										<textarea maxlength='40' class='value txtareaspec' name='value$x' id='field$x' type='text'  onchange='updateInput($x)'>$itemVal</textarea>
									</form>
								</div>
							</div>
						";
					} else {
						 echo "	
		 				 	<div class='hexagon hex$x'>
								<img src='assets/hexx$x.png' class='hexImg'></img>
								<div class='tit'>$titelValue</div>
								<div>";
									if(strlen($itemVal)==0){
										echo "<div id='q$x' class='qmark'><img src='assets/q.png'></div>";		
									} 	
									echo"<form id='form$x' method='post' class='hexInput'>
										<textarea maxlength='100' class='value txtarea' name='value$x' id='field$x' type='text'  onchange='updateInput($x)' onclick='updateQ($x)'>$itemVal</textarea>
									</form>";
								
									echo"
								</div>
							</div>
						";
					}
				} 
			?>
		</div>
		</div>
	</body >
	<script>
	
		for (i = 1; i < 7; i++) { 
			var fieldName = 'field'+i;
   			updateInput = function(x){
   				//document.getElementById('form'+i).method = "post";
   				document.getElementById('form'+x).submit();
   			}
   			updateQ = function(x){
   				//document.getElementById('form'+i).method = "post";
   				document.getElementById('q'+x).style.visibility='hidden';

   			}
		}
	</script>
</html>