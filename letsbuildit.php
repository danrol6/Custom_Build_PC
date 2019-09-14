<?php
	session_start();
	//$componentsArray = array("cpu"=>50,"fan"=>20,"motherboard"=>20,"operating system"=>20);
	//$_SESSION["componentsArray"] = $componentsArray;
?>
<?php 
include ('includes/header.php');
?>


<head>
		<link rel="stylesheet" href="./css/pagestyling.css">
		<script type="text/javascript" src="./js/letusbuildit.js"></script>

</head>

<div class="pagestyling">
  <div class="column left" style="background-color:#aaa;">
    <h3><b>Component Summary</b></h3>


<!-- ------------------------------------------------------------------------------------------------------------------>

<?php

$componentsArray1 = $_SESSION["componentsArray"];
$totalComponents = 0;

	// Table header.
	echo '<table align="center" cellspacing="3" cellpadding="3" width="100%">
	<tr><td align="left"><b>Component</b></td><td align="center"><b>Price</b></td></tr>';

foreach($componentsArray1 as $x=>$x_value)
  {
  	echo '<tr><td align="left">' . $x  . '</td><td align="left">$' . $x_value . '.00</td></tr>';

	  $totalComponents +=$x_value;
  }

  echo '</table>'; // Close the table.
?>

<script type="text/javascript">var itemsPrice = <?php echo $totalComponents; ?>;</script>

<!-- ------------------------------------------------------------------------------------------------------------------>


  </div>
  <div class="column middle" style="background-color:#bbb;">
  
    <h3><b>1. Professional Build </b></h3> 
	
	<button onclick="showProfessionalBuild();" id="showProBuildBtn">v</button>
	
	<div id="professionalBuildHide">
		&emsp;&emsp;<input type="radio" id="probuildyes" onclick="showProBuildBtn();" style="padding-right:50px;" name="ProBuildrbt"/> <b>Yes</b> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		<input type="radio" id="probuildno" onclick="showProBuildBtn();" name="ProBuildrbt"/> <b>No</b><br>
	</div>
	
	<h3><b>2. Shipping & Handling</b></h3>
	<button onclick="showshippingandhandling();" id="showshippingandhandlingBTN">v</button>
	<div id="shippingandhandling">
		<b>Rushed</b>&emsp;<input type="radio" style="padding-right:50px;" id="rushed" onclick="updateShippingAndHandlingPrice();" name="ShippingHandling"> 7 Days &emsp;&emsp;&emsp;&emsp;&emsp;
		<b>Standard</b>&emsp;<input type="radio" onclick="updateShippingAndHandlingPrice();" id="standard" name="ShippingHandling"> 21 Days<br><br>
		
		<label style="width:15%;"> *Name: </label> <input type="text" id="name" placeholder = "Enter your name" style="width:80%;"/> <br>
		<label style="width:20%;"> *Address: </label> <input type="text" id="address" placeholder = "Enter your address" style="width:75%;"/> <br>
		<label style="width:10%;"> *City: </label> <input type="text" id="city" placeholder = "City" style="width:15%;"/>
		<label style="width:10%;"> *State: </label> <input type="text" id="state" placeholder = "State" style="width:15%;"/>	
		<label style="width:18%;"> *Zip Code: </label> <input type="text" id="zipcode" placeholder = "Zip Code" style="width:25%;"/> <br>
		<label style="width:30%;"> *Country/Region: </label> 			 
		<select id="country" >
			  <option value="01">United States</option>
			  <option value="02">Canada</option>
		</select><br> 

		<!--<input type="text" id="country" placeholder = "Enter your country" style="width:65%;"/> <br> -->
		<label style="width:30%;"> *Phone Number: </label> <input type="text" id="phonenumber" placeholder = "Enter your phone number" style="width:60%;"/> <br>
		<label style="width:25%;"> Instructions: </label> <br>
		<textarea name='comment' placeholder = "Enter any special instructions...." style="width:100%; height:100px;"></textarea><br>
		<label style="opacity:.5"> *Required Fields </label> <br>
		<input type="button" style="float: right;" onclick="validateShippingandHandling();" value="Submit"/><br>
	</div>
	
	<h3><b>3. Payment Information</b></h3>
	
	<button onclick="showPaymentInfo();" id="showPaymentInfoBTN">v</button>
	
	<div id = "paymentInfo">
		<b>Extra Care Package</b>&emsp;<input type="radio" onclick="updateCarePackage();" style="padding-right:50px;" id="carepackageyes" name="PaymentInfo"> Yes &emsp;&emsp;&emsp;&emsp;
		<input type="radio" id="carepackageno" onclick="updateCarePackage();" name="PaymentInfo"/> No<br><br>
		
		<fieldset>
			<legend style="font-size:14px;"> <b>Credit Card Information</b> </legend>
			<label style="width:25%;"> *Card Number: </label> <input type="text" id="cardnumber" placeholder = "Enter your card number" style="width:60%;"/> <br>
			<label style="width:26%;"> *Name on Card: </label> <input type="text" id="nameoncard" placeholder = "Enter the name on the card" style="width:60%;"/> <br>
			<label style="width:30%;"> *Expiration Date: </label>
			 <select id="year" >
			  <option value="2018">2018</option>
			  <option value="2019">2019</option>
			  <option value="2020">2020</option>
			  <option value="2021">2021</option>
			  <option value="2022">2022</option>
			  <option value="2023">2023</option>
			  <option value="2024">2024</option>
			</select>
			<select id="month" ">
			  <option value="01" >January-01</option>
			  <option value="02" >February-02</option>
			  <option value="03" >March-03</option>
			  <option value="04" >April-04</option>
			  <option value="05" >May-05</option>
			  <option value="06" >June-06</option>
			  <option value="07" >July-07</option>
			  <option value="08" >August-08</option>
			  <option value="09" >September-09</option>
			  <option value="10" >October-10</option>
			  <option value="11" >November-11</option>
			  <option value="12" >December-12</option>
			</select>
		</fieldset>
		<label style="opacity:.5"> *Required Fields </label> <br>
		<input type="button" style="float: right;" onclick="validatePaymentInfo();" value="Submit"/><br>
	</div>
	
	<input type="button" id="placeorderBTNMid" style="float: right;" onclick="placeOrder();" value="Place Order"/><br>
	
  </div>
  <div class="column right" style="background-color:#ccc;">
    <h3><b>Order Summary</b></h3>
	<label>Components Total:</label><label id="itemsPrice" style="float:right;"> $<?php echo $totalComponents; ?>.00</label><br>
	<label>Pro Build:</label><label id="proBuildPrice" style="float:right;">$---</label><br>
	<label>Shipping & Handling:</label><label id="shippingandhandlingprice" style="float:right;">$---</label><br>
	<label>Extra Care Package:</label><label id="extracarepackage" style="float:right;">$---</label><br><br>
	
	<label>Sub Total:</label><label id="subtotal" style="float:right;">$---</label><br>
	<label>Taxes:</label><label id="taxes" style="float:right;">$10.00</label><br><br>
	
	<label>Total Price:</label><label id="totalPrice" style="float:right;">$---</label>
	<input type="button" id="placeorderBTNRight" style="float: right;" onclick="placeOrder();" value="Place Order"/><br>
  </div>
</div>

<?php
include ('includes/footer.html');
?>

