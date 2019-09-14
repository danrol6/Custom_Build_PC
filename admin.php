<?php
	session_start();
	//$componentsArray = array("cpu"=>50,"fan"=>20,"motherboard"=>20,"operating system"=>20);
	//$_SESSION["componentsArray"] = $componentsArray;
?>

<?php
	if(isset($_GET['chassisTable'])){
		echo "teste";
		$test = $_GET['chassisTable'];

		 require('mysqli_connect.php');
		// // Make the query:

		 $q = "DELETE FROM chassis_table where id =". $test ;
		 $result = mysqli_query($dbc, $q); // Run the query.
		//mysqli_free_result ($r);
		
		mysqli_close($dbc);
	}


?>


<?php 
include ('includes/header.php');
?>


<head>
		<link rel="stylesheet" href="./css/pagestyling.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<div class="pagestyling">
  <div class="column left" style="background-color:#aaa;">
    <h3><b>Tables</b></h3>


<!-- ------------------------------------------------------------------------------------------------------------------>
	<?php
	require('mysqli_connect.php');
	// Make the query:

	$q = "SELECT table_name FROM information_schema.tables where table_schema='cs319_1_fall2018_group6_db' AND table_name!='users' AND table_name !='componentschosen_table' AND table_name !='ser_types' AND table_name !='user_types' ";

//"SELECT game_name, game_description  FROM Game_tbl";		
	$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			while($row = mysqli_fetch_assoc($result)){

				echo '<button type="button" class="btn btn-info btn-block" id = " ' . $row['table_name'] . '" data-toggle="collapse" data-toggle="collapse" data-target="#' . $row['table_name'] . '" >' . $row['table_name'] . '</button> <br>';

			}
		}
		else
		{
			echo 'error getting info';
		}
		mysqli_free_result ($r);
		
		mysqli_close($dbc);
	?>

<!-- ------------------------------------------------------------------------------------------------------------------>

  </div>
  <div class="column middle" style="background-color:#bbb; width:70%";>
	<div id="Game_tbl" class="collapse"> 
		<form action ="admin.php">
		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM Game_tbl";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" value ="'. $row['game_id'] . '" id="' . $row['game_id'] .'" name="gameInfo"></td><td align="left">' . $row['game_id'] . '</td><td align="left">' . $row['game_name'] . '</td></td>'. '</td><td align="left">' . $row['game_powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>
				<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>





<!------------------------------------------------------------------------------------------------------------------------------------------------------->
		<div id="chassis_table" class="collapse"> 
			<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM chassis_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" value ="'. $row['id'] . '" id="' . $row['id'] .'" name="chassisTable"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['name'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>


		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>


<script>
	function test(){
		var selValue = $('input[name=chassisTable]:checked').val(); 
		//alert(selValue);

		$("#chassisTable").change(function(){
			$.post("admin.php", {value_id: selValue}, function(data,status){
				$("#chassisTable").html(data);
			});
		});
		// 	url:'admin.php',
		// 	type: 'GET',
		// 	data: selValue,
		// 	success: function(data){
		// 		$("#chassisTable").html(data);
		// 	}
		// });
		//alert("Sorry, this feature is under construction");
	}
</script>


<?php
	$userAnswer = $_GET['selValue'];    
	echo $userAnswer;  
?>


	<!----------------------------------------------------------------------------------------------------------------------------------------------------->









	<div id="cpu_table" class="collapse"> 
<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM cpu_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['name'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>


			<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

	<div id="cpufan_table" class="collapse"> 
		<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM cpufan_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['name'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>


		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

		<div id="fan_table" class="collapse"> 
			<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM fan_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['name'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>

		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

	<div id="harddrive_table" class="collapse"> 

<form action ="admin.php">
		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM harddrive_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['make'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>


		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

	<div id="motherboard_table" class="collapse"> 
		<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM motherboard_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['name'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>

		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

	<div id="networkcard_table" class="collapse"> 
<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM networkcard_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['make'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>

		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

	<div id="operatingsystem_table" class="collapse"> 
		<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM operatingsystem_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['name'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>

		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

	<div id="powersupply_table" class="collapse"> 
		<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM powersupply_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['make'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>
		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>

		<div id="ram_table" class="collapse"> 
			<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM ram_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['make'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>

		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>


		<div id="videocard_table" class="collapse"> 
<form action ="admin.php">

		<?php
		require ('mysqli_connect.php');
			$q = "SELECT * FROM videocard_table";		

		$result = mysqli_query($dbc, $q); // Run the query.

		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck > 0){
			// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td></td><td align="left"><b>ID</b></td><td align="left"><b>Name</b></td><td align="left"><b>Power Rating</b></td></tr>';
	
			while($row = mysqli_fetch_assoc($result)){
					echo '<tr><td><input type="radio" name="PaymentInfo"></td><td align="left">' . $row['id'] . '</td><td align="left">' . $row['name'] . '</td></td>'. '</td><td align="left">' . $row['powerrating'] . '</td></tr>';
				}

				echo '</table>'; // Close the table.
				mysqli_free_result ($r); // Free up the resources.	

			} else { // If it did not run OK.

				// Public message:
				echo '<p class="error">Error retriving info</p>';
				
			} // End of if ($r) IF.

			mysqli_close($dbc); // Close the database connection.

		?>

		<input type="submit" onclick="test();"value="Delete"></button>
	</form>
	</div>


  </div>

   <script>
   		function hideothers(something){
   			//alert(something);
   			//document.getElementById("Game_tbl").style.display='none';
   			document.getElementById("chassis_table").style.display='none';
   			document.getElementById("cpu_table").style.display='none';
   			document.getElementById("cpufan_table").style.display='none';
   			document.getElementById("fan_table").style.display='none';
   			document.getElementById("harddrive_table").style.display='none';
   			document.getElementById("motherboard_table").style.display='none';
   			document.getElementById("networkcard_table").style.display='none';
   			document.getElementById("operatingsystem_table").style.display='none';
   			document.getElementById("Game_tbl").style.display='none';
   			document.getElementById("powersupply_table").style.display='none';
   			document.getElementById("ram_table").style.display='none';
   			document.getElementById("videocard_table").style.display='none';
   			//alert(something);
   			document.getElementById(something).style.display='block';
   		}
   </script>

</div>

<?php
include ('includes/footer.html');
?>

