<html lang="en">
<head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
        
    <!-- Bootstrap theme -->
    <!-- -->
	<link href="css/theme.css" rel="stylesheet" /> 
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/base1.css">
	<!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">-->
    <!-- Custom CSS -->
	<!-- 
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> 
	<link rel="stylesheet" href="css/otherstyle.css"> 
	-->
    
        <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">
    
    <!-- Fixed navbar -->
      <div id="wrapper">
         <div id="divHeader">
            <header>
               <a href="./index.php"><img class="image" src="./images/logo.png" width="200" height="150" alt="logo"></a>
               <ul>
                  <li><a class="headLinks" href="./index.php">Home</a></li>
                  <li><a class="headLinks" href="gametopcspecs.php">Game To PC Specs</a></li>
                  <li><a class="headLinks" href="CBPC2.php">Custom Built PC</a></li>
                  <li><a class="headLinks" href="letsbuildit.php">Let's Build It!</a></li>
                  <li><a class="headLinks" href="register.php">Register</a></li>
                  <li><a class="headLinks" href="login.php">Login</a></li>
               </ul>
            </header>
         </div>
      </div>
    
    
   <div class="container">
    <div class="jumbotron">
      <head>
        <script type="text/javascript" src="./js/CBPCJS.js"></script>
      </head>
      <div class="row">
        <div class ="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <h3>Component List</h3>
          
          <button onclick="displayChassis();" id="dispChasBtn" class="btn-info btn-block">Chassis</button>
          <button onclick="displayFan();" id="dispFanBtn" class="btn-info btn-block">Fan</button>
          <button onclick="displayCPU();" id="dispCPUBtn" class="btn-info btn-block">CPU</button>
          <button onclick="displayCF();" id="dispCFBtn" class="btn-info btn-block">CPU Fan</button>
          <button onclick="displayMB();" id="dispMBBtn" class="btn-info btn-block">Motherboard</button>
          <button onclick="displayRAM();" id="dispRAMBtn" class="btn-info btn-block">RAM</button>
          <button onclick="displayVC();" id="dispVCBtn" class="btn-info btn-block">Video Card</button>
          <button onclick="displayPS();" id="dispPSBtn" class="btn-info btn-block">Power Supply</button>
          <button onclick="displayHDD();" id="dispHDDBtn" class="btn-info btn-block">Hard Drive</button>
          <button onclick="displayNC();" id="dispNCBtn" class="btn-info btn-block">Network Card</button>
          <button onclick="displayOS();" id="dispOSBtn" class="btn-info btn-block">Operating System</button>
        
        </div>  
      
    <div class ="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      
        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="ChassisHide"> 
        
             <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, name AS name, price AS dr, powerrating AS pr, id AS id FROM chassis_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
          </div>   

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="FanHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, name AS name, price AS dr, powerrating AS pr, id AS id FROM fan_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div>  

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="CPUHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("cpu" => 50, "fan" => 20, "mother board" => 20, "operating system" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, name AS name, price AS dr, powerrating AS pr, id AS id FROM cpu_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div>  

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="CFHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, name AS name, price AS dr, powerrating AS pr, id AS id FROM cpufan_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div>  

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="MBHide">
            
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, name AS name, price AS dr, powerrating AS pr, id AS id FROM motherboard_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div>  

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="RAMHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, make AS name, price AS dr, powerrating AS pr, id AS id FROM ram_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div>  

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="VCHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, name AS name, price AS dr, powerrating AS pr, id AS id FROM videocard_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div>  

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="PSHide">
            <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, make AS name, price AS dr, powerrating AS pr, id AS id FROM powersupply_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div> 

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="HDDHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, make AS name, price AS dr, powerrating AS pr, id AS id FROM harddrive_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div> 

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="NCHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 30, "Fan" => 20, "CPU" => 50,  "CPU Fan" => 60, "Motherboard" => 400, "RAM" => 270, "Video Card" => 90, "Power Supply" => 60, "Hard Drive" => 60, "Network Card" => 30, "Operating System" => 20);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, make AS name, price AS dr, powerrating AS pr, id AS id FROM networkcard_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div> 

        <div class ="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="OSHide">
          <?php # Script 9.4 - view_users.php #2
                // This script retrieves all the records from the users table.
                session_start();
                $componentsArray = array("Chassis" => 120, "Fan" => 45, "CPU" => 320,  "CPU Fan" => 60, "Motherboard" => 600, "RAM" => 126, "Video Card" => 470, "Power Supply" => 115, "Hard Drive" => 250, "Network Card" => 60, "Operating System" => 100);

                $_SESSION["componentsArray"] = $componentsArray;
                require ('mysqli_connect.php'); // Connect to the db.
                    
                // Make the query:
                $q = "SELECT component_image AS image, name AS name, price AS dr, powerrating AS pr, id AS id FROM operatingsystem_table";    
                $r = @mysqli_query ($dbc, $q); // Run the query.

                $num = mysqli_num_rows($r);

                if ($num>0) { // If it ran OK, display the records.
                  
                  // Fetch and print all the records:
                  while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
                     echo '<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="ComponentContainer">';
                     echo '<div class="image-row">';
                     echo '<img src="./images/' . $row['image'] .'" alt=" " height="120px" width="120px">';
                     echo '</div>';
                     echo '<div class="name-row">';
                     echo '<p style="text-align: center;">' . $row['name'] . '</p>';
                     echo '</div> ';
                    // echo '<div class="price-row">';
                     //echo '<p style="text-align: center">$'. $row['dr'] . '.00</p>';
                     //echo ' </div>';
                     
                     echo '<div class="radio">';
                     echo ' <label><input type="radio" name="optradio" id="'. $row['id'] . '"><p style="text-align: left">$'. $row['dr'] . '.00</p></label>';
                     echo '</div>';

                     echo '</div>';//End of container
                  }
                  
                  mysqli_free_result ($r); // Free up the resources.  

                } else { // If it did not run OK.

                  // Public message:
                  echo '<p class="error">Error retriving info</p>';
                  
                } // End of if ($r) IF.

                mysqli_close($dbc); // Close the database connection.
              ?>
        </div> 
    </div> 
        <div class ="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="itemsLeft">
                <div id="itemsRight">
                  <p>
                    <?php

                      $componentsArray1 = $_SESSION["componentsArray"];
                      $totalComponents = 0;

                        // Table header.
                        echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
                        <tr><td align="left"><b>Recommended Components</b></td><td align="center"><b>Price</b></td></tr>';

                      foreach($componentsArray1 as $x=>$x_value)
                        {
                          echo '<tr><td align="left">' . $x  . '</td><td align="left">$' . $x_value . '.00</td></tr>';

                          $totalComponents +=$x_value;
                        }

                        echo '</table>'; // Close the table.
                      ?>

                      <script type="text/javascript">var itemsPrice = <?php echo $totalComponents; ?>;</script></p>
                </div>
                  <br>          
              </div>
              <div class ="subtotal">
                <div id="subtotalLeft">
                  <h3>Subtotal:</h3>
                </div>
                <div id="subtotalRight">
                  <p><?php

                      $componentsArray1 = $_SESSION["componentsArray"];
                      $totalComponents = 0;

                        // Table header.
                        //echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
                        //<tr><td align="left"><b>Component</b></td><td align="center"><b>Price</b></td></tr>';

                      foreach($componentsArray1 as $x_value)
                        {
                          $totalComponents +=$x_value;

                          
                        }
                        echo '$' . $totalComponents . '.00';
                        //echo '</table>'; // Close the table.
                      ?>

                      <script type="text/javascript">var itemsPrice = <?php echo $totalComponents; ?>;</script></p>
                </div> 
                <button type="button" class="btn btn-md btn-primary" onclick="submit()">Submit PC</button>
                
                <button type="button" class="btn btn-danger" onclick="checked()">Swap Parts</button>

              </div>
              </div>  
            </div>  
          </div>
        </div>
    	
    <div id="footer">
        <p>Copyright &copy; <a href="#">Plain and Simple</a> 2007 | Designed by <a href="http://www.edg3.co.uk/">edg3.co.uk</a> | Sponsored by <a href="http://www.opendesigns.org/">Open Designs</a> | Valid <a href="http://jigsaw.w3.org/css-validator/">CSS</a> &amp; <a href="http://validator.w3.org/">XHTML</a></p>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
   </body>
</html>