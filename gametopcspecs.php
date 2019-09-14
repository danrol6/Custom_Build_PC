<?php
	session_start();
?>


<?php 
include ('includes/header.php');
?>
<head>
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
		<link rel="stylesheet" href="./css/pagestyling.css"
		<link rel="stylesheet" href="./css/base1.css">
</head>
<div align="center">	
<h2><u><b>PC To Game Specs</b></u></h2>
</div>
<div class="row">
	<div class="column left" style = "background-color:#aaa;">
	<h2><b><u> Games</u></b></h2>
	
	<div class="checkbox">
	<label><input type="checkbox" name="game" id="game1" value="3">	
	<div button type="button" class="btn btn-info" data-toggle="collapse" data-target="#battlefieldvdes">
	Battlefield 5 </button>
	</div></label>
	</div>
	
	<div class="checkbox">
	<label><input type="checkbox" name="game" id="game2" value="3">	
	<div button type="button" class="btn btn-info" data-toggle="collapse" data-target="#worldofwarcraftdes">
	World of Warcraft </button>
	</div></label>
	</div>
	
	<div class="checkbox">
	<label><input type="checkbox" name="game" id="game3"  value="0">	
	<div button type="button" class="btn btn-info" data-toggle="collapse" data-target="#supersmashbrosdes">
	Super Smash Bros. </button>
	</div></label>
	</div>
	
	<div class="checkbox">
	<label><input type="checkbox" name="game" id="game4" value="5">	
	<div button type="button" class="btn btn-info" data-toggle="collapse" data-target="#fortnitedes">
	Fortnite </button>
	</div></label>
	</div>
	
	<div class="checkbox">
	<label><input type="checkbox" name="game" id="game5" value="7">	
	<div button type="button" class="btn btn-info" data-toggle="collapse" data-target="#fallout4des">
	Fallout 4 </button>
	</div></label>
	</div>
	<button type="button" class="btn btn-md btn-primary" onclick="submit()">Submit Games</button>
	</div>
	
	
	<!--end of game column -->
	<div class="column middle" style = "background-color:#bbb;">
	<h2><b><u> Description</u></b></h2>
	<div id="battlefieldvdes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_description FROM Game_tbl where game_name='battlefield 5'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_description']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
	echo"----------------------------------------------------------------------";
	mysqli_close($dbc);
	?>
	</div>
	<div id="worldofwarcraftdes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_description FROM Game_tbl where game_name='world of warcraft'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_description']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
	echo"----------------------------------------------------------------------";
	mysqli_close($dbc);
	?>
	</div>
	<div id="supersmashbrosdes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_description FROM Game_tbl where game_name='super smash bros.'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_description']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
	echo"----------------------------------------------------------------------";
	mysqli_close($dbc);
	?>
	</div>
	<div id="fortnitedes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_description FROM Game_tbl where game_name='fortnite'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_description']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
	echo"----------------------------------------------------------------------";
	mysqli_close($dbc);
	?>
	</div>
	<div id="fallout4des" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_description FROM Game_tbl where game_name='fallout 4'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_description']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
	echo"----------------------------------------------------------------------";
	
	mysqli_close($dbc);
	?>
	</div>
	</div>
	<!--end of description column -->
	
	
	
	
	
	
	
	<div class="column right" style = "background-color:#ccc;">
	<h2><b><u> Requirements</u></b></h2>
	<div id="battlefieldvdes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_specs FROM Game_tbl where game_name='battlefield 5'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_specs']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
		echo"--------------------------------";
	
	mysqli_close($dbc);
	?>
	</div>
	
	<div id="worldofwarcraftdes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_specs FROM Game_tbl where game_name='world of warcraft'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_specs']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
		echo"--------------------------------";
	
	mysqli_close($dbc);
	?>
	
	</div>
	
	<div id="supersmashbrosdes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_specs FROM Game_tbl where game_name='super smash bros.'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_specs']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
		echo"--------------------------------";
	
	mysqli_close($dbc);
	?>
	
	</div>
	
	<div id="fortnitedes" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_specs FROM Game_tbl where game_name='fortnite'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_specs']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
		echo"--------------------------------";
	
	mysqli_close($dbc);
	?>
	</div>
	
	<div id="fallout4des" class="collapse">
	<?php
	require('mysqli_connect.php');
	// Make the query:
	$q = "SELECT game_specs FROM Game_tbl where game_name='fallout 4'";		
	$result = mysqli_query($dbc, $q); // Run the query.

	$resultCheck = mysqli_num_rows($result);
	
	if ($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['game_specs']. '<br>';
		}
	}
	else
	{
		echo 'error getting info';
	}
	mysqli_free_result ($r);
	echo"--------------------------------";
	
	mysqli_close($dbc);
	?>
	
	</div>
	</div>
	<!--end of requirements column -->





<?php
include ('includes/footer.html');
?>

 <script>
    function submit(){
		        var r = window.confirm("Are you sure you want to submit these games?");
        if(r){
          window.location.href="http://cs.neiu.edu/~cs319_1_fall2018_group6/CBPC2.php";
      }
	}
	  
 </script>
<?php

$_SESSION["game_powerrating"] = 5;

?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>