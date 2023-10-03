<?php
include('config.php');
?><html>
	<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>		<link rel="stylesheet" type="text/css" href="drunken_style.css">
		<SCRIPT LANGUAGE="JavaScript" SRC="js/core.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" SRC="js/JSTweener.js"></SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" SRC="js/Team.js"></SCRIPT>
	</head>
	<body>
		<div class="overviewMain">
					<h1 style="color:#FFF"><?php echo _('Museomix overview'); ?></h1>

			<div class='container1'>
			<div class="logo"><img src="assets/museilogo.png"></div>
				<?php 
					$counter = 0;
					for ($x=1; $x<4; $x++) {
						echo "<a href='./view.php?userId=$x'>";
						echo "<div class='collumn col$x'>";
						$alt=1;
						for ($y=1; $y<=8; $y++) {

							
						  	if($y==1){
						  		$itemValue = file_get_contents("teamData/teamData/team$x/team.txt");
						  		echo "<div class='overviewLine overviewTeamName'>
						  		<div class='overviewValue2'>$itemValue</div></div>
						  		<div class='divider'><img src='assets/divider.png'></div>";
						  	} else {
						  			echo "<div class='rowcontainer'>";
						  			$temp = $y-1;
						  			$itemValue = file_get_contents("teamData/teamData/team$x/item$temp.txt");
						  			if(strlen($itemValue)==0){
						  				$itemValue = "?";	
						  			}
						  			echo "<div class='overviewLine'><div class='bullet'><img class='bulletImg' src='assets/hexx$temp.png'></div>
						  				<div class='overviewValue alt$alt'>$itemValue</div></div>";
						  				echo "</div>";
						  			if($alt==1){
						  		$alt=2;
						  	} else {
						  		$alt=1;
						  	}
						  		

						  	}

						  
						}
						echo "</div>";	
						echo "</a>";
					} 
				?>
			</div>
			<div class='container2'>
			
				<?php 
					$counter = 0;
					for ($x=4; $x<8; $x++) {
						echo "<a href='./view.php?userId=$x'>";
						echo "<div class='collumn col$x'>";
						$alt=1;
						for ($y=1; $y<=8; $y++) {
						  	echo "<div class='rowcontainer'>";

						  	if($y==1){
						  		$itemValue = file_get_contents("teamData/teamData/team$x/team.txt");
						  		echo "<div class='overviewLine overviewTeamName'>
						  		<div class='overviewValue2'>$itemValue</div></div>
						  		<div class='divider'><img src='assets/divider.png'></div>";
						  	} else {
						  			$temp = $y-1;
						  			$itemValue = file_get_contents("teamData/teamData/team$x/item$temp.txt");
						  			if(strlen($itemValue)==0){
						  				$itemValue = "?";	
						  			}
						  			echo "<div class='overviewLine'><div class='bullet'><img class='bulletImg' src='assets/hexx$temp.png'></div>
						  				<div class='overviewValue alt$alt'>$itemValue</div></div>";
						  				if($alt==1){
						  		$alt=2;
						  	} else {
						  		$alt=1;
						  	}
						  		

						  	}
						  	echo "</div>";

						}
						echo "</div>";
						echo "</a>";	
					} 
				?>
			</div>
		</div>
		
	</body >	
		<script type="text/javascript">
				var funki =  function(){
					location.reload();
				}
				setInterval(function(){funki()}, 50000);
		</script>
	</script>
</html>
