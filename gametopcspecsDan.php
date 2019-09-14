
<?php 
include ('includes/header.php');



?>



<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="./css/pagestyling.css">
		
</head>
<---------------------------------------------------------------------------------------------------->


<h2>PC To Game Specs</h2>

<div class="row">
	<div class="column left" style = "background-color:#aaa;">
	<h2><b><u> Games</u></b></h2>
	


	<div class="checkbox">
	<label><input type="checkbox" value="">	
	<div button type="button" class="btn btn-info" data-toggle="collapse" data-target="#battlefieldvdes">
Battlefield 5 </button>
	</div></label>
	</div>


	<?php
require('mysqli_connect.php');
// Make the query:
$q = "SELECT game_name, game_description  FROM Game_tbl";		
$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	$arrayofGames = array();
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){

			echo '<div class="checkbox"><label><input type="checkbox" value="">	<div button type="button" class="btn btn-info" data-toggle="collapse" data-target="#">' . $row['game_name'] . '</button></div></label></div>';

			$arrayofGames += array($row['game_name'] => $row['game_description']);

		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
	
	mysqli_close($dbc);
	?>


	
	
	</div>
	<div class="column middle" style = "background-color:#bbb;">
	<h2><b><u> Description</u></b></h2>
	


	<div id="battlefieldvdes" class="collapse"> test
	<?php
		echo $arrayofGames['Battlefield 5'];
	?>
	</div>
	
	<div id="fallout4des" class="collapse">
	
	
	
	
	
	</div>

	</div>
	<div class="column right" style = "background-color:#ccc;">
	<h2><b><u> Requirements</u></b></h2>
	<div id="fallout4des" class="collapse">
	THIS IS THE Requirements
	</div>
	</div>

	<div class = "column middle" style = "background-color:#aaa;">
	<h2><b><u> Recommended PC Build </u></b></h2>
	
	
	</div>




<?php
include ('includes/footer.html');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>