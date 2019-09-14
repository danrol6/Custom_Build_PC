//var itemsPrice = 0;
var proBuildPrice = 0;
var shippingandhandlingprice = 0;
var extracarepackage=0;
var subtotal = 0;
var taxes = 10;
var totalPriceVar =0;
//hides all elements that dont need to be there first
window.onload=function(){
  document.getElementById("showProBuildBtn").style.display='none';
  document.getElementById("shippingandhandling").style.display='none';
  document.getElementById("paymentInfo").style.display='none';  
  document.getElementById("showPaymentInfoBTN").style.display='none';  
  document.getElementById("showshippingandhandlingBTN").style.display='none';
  document.getElementById("placeorderBTNMid").style.display='none';
  document.getElementById("placeorderBTNRight").style.display='none';

  subtotalmethod();
  totalPrice();
}

//When user clicks radio button, hides radio button in probuild and shows shipping&handling
function showProBuildBtn(){
	var probuildyes = document.getElementById("probuildyes");
	var probuildno = document.getElementById("probuildno");
	var x = document.getElementById("showProBuildBtn");
    x.style.display = "block";

    if(probuildyes.checked == true){
    	proBuildPrice =50;
    	subtotalmethod();
    }
    if(probuildno.checked == true){
    	proBuildPrice =0;
    	subtotalmethod();
    }

    showProfessionalBuild();
	alwaysShowShippingAndHandling();
}


//shows the radio buttons in probuild 1
function showProfessionalBuild() {
    var x = document.getElementById("professionalBuildHide");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

//shows the shipping and handling option
function showshippingandhandling() {
	var x = document.getElementById("shippingandhandling");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function alwaysShowShippingAndHandling(){
	document.getElementById("shippingandhandling").style.display='block';
}

function showshippingandhandlingBTN(){
		document.getElementById("showshippingandhandlingBTN").style.display='block';
	}

function hideshippingandhandling(){
	document.getElementById("shippingandhandling").style.display='none';
}

//validate ShippingandHandling
function validateShippingandHandling(){
		var er = "Please fix the following errors: "

		var shippingstandard = document.getElementById("standard").checked;
		var shippingrushed = document.getElementById("rushed").checked;
		var name = document.getElementById("name").value;
		var address = document.getElementById("address").value;
		var city = document.getElementById("city").value;
		var state = document.getElementById("state").value;
		var zipcode = document.getElementById("zipcode").value;
		var country = document.getElementById("country").value;
		var phonenumber = document.getElementById("phonenumber").value;

		//Validates an option for the shipping 
		if(shippingstandard ==false && shippingrushed==false){
			er += "Select a shipping option\n"
		}

		//validates the name
		if (name.length==0){
			er += "Enter a Name\n";
		}
		else if(!/[a-zA-Z]+|[a-zA-Z]+\s+/.test(name)){
			er+="Enter only letters for name\n";
		}

		//validates address
		if (address.length==0){
			er += "Enter an Address\n";
		}
		else if(!/^[0-9]+\s[a-zA-Z]+$/.test(address)==true){
			er += "Address must be in the format\"123 Address\"\n";
		}

		//validate city
		if (city.length==0){
			er += "Enter a City\n";
		}
		else if(!/[a-zA-Z]+|[a-zA-Z]+\s+/.test(city)){
			er += "City name must be only letters\n"
		}

		//validate State
		if (state.length==0){
			er += "Enter a State\n";
		}
		else if(!/^[A-Z]{2}$/.test(state)){
			er += "State must be in the format \"ST\"\n";
		}

		//validate Zip Code
		if (zipcode.length==0){
			er += "Enter a Zip Code\n";
		}
		else if(!/^[0-9]{5}$/.test(zipcode)){
			er += "Zipcode must be only six numbers only\n";
		}

		//validate country
		// if (country.length==0){
		// 	er += "Enter a Country\n";
		// }

		//validate phone number
		if (phonenumber.length==0){
			er += "Enter a Phone Number\n";
		}
		else if(!/^[0-9]{10}$/.test(phonenumber)){
			er += "Enter a 10-digit phone number\n"
		}
		
		if(er.length>33){
			alert(er);
		}
		else{
			hideshippingandhandling()
			showshippingandhandlingBTN();
			alwaysShowPaymentInfo();
		}
}

//shows the PaymentInfo section
function showPaymentInfo(){
		var x = document.getElementById("paymentInfo");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function updateShippingAndHandlingPrice(){
	var shippingstandard = document.getElementById("standard").checked;
	var shippingrushed = document.getElementById("rushed").checked;
	if(shippingrushed == true){
		shippingandhandlingprice = 30;
	}
	else if(shippingstandard == true){
		shippingandhandlingprice = 15;
	}
	subtotalmethod();
}

function alwaysShowPaymentInfo(){
	document.getElementById("paymentInfo").style.display='block';
}

function hidePaymentInfo(){
		  document.getElementById("paymentInfo").style.display='none';
}

function showPaymentInfoBTN(){
	document.getElementById("showPaymentInfoBTN").style.display='block';
}

function validatePaymentInfo(){
	var er = "Please fix the following errors: "

	var  carepackageyes= document.getElementById("carepackageyes").checked;
	var carepackageno = document.getElementById("carepackageno").checked;
	var cardnumber = document.getElementById("cardnumber").value;
	var nameoncard = document.getElementById("nameoncard").value;
	var e = document.getElementById("year");
	var year = e.options[e.selectedIndex].value;
	e = document.getElementById("month");
	var month = e.options[e.selectedIndex].value;

	var currentTime = new Date();
	var currentYear = currentTime.getFullYear();
	var currentMonth = currentTime.getMonth()+1;
	
	if(carepackageyes ==false && carepackageno==false){
		er += "Select a care package option\n"
	}

	//validate length of card
	if (cardnumber.length==0){
		er += "Enter a Card Number\n";
	}
	else if(!/^[0-9]{16}$/.test(cardnumber)){
		er += "Enter a valid card number\n"
	}

	//validate name on card
	if (nameoncard.length==0){
		er += "Enter the name as it appears on the card\n";
	}
	else if(!/[a-zA-Z]+|[a-zA-Z]+\s+/.test(nameoncard)){
		er += "Name must contain only letters\n";
	}


	if(year<currentYear){
		er += "The card you entered has expired!\n"
	}
	else if(year==currentYear){
		if(month<currentMonth){
			er += "The card you entered has expired!\n"
		}
	}

	if(er.length>33){
		alert(er);
	}
	else{
		hidePaymentInfo();
		showPaymentInfoBTN();
		showPlaceOrderBTN();
	}

}

function updateCarePackage(){
	var  carepackageyes= document.getElementById("carepackageyes").checked;
	var carepackageno = document.getElementById("carepackageno").checked;

	if(carepackageyes ==true){
		extracarepackage = 40;
	}
	else{
		extracarepackage = 0;
	}
	subtotalmethod();
}
function showPlaceOrderBTN(){
	document.getElementById("placeorderBTNRight").style.display='block';
	document.getElementById("placeorderBTNMid").style.display='block';
}

function placeOrder(){
	alert("Your order has been placed!\nYour order number is: " + generateNum() + "\nAnd your Confirmation number is: " + generateNum() + "\nThank you for shopping with us!");
}

function generateNum() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < (Math.random()*11)+4; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

function subtotalmethod(){
	subtotal = itemsPrice + proBuildPrice + shippingandhandlingprice + extracarepackage;
	totalPrice();
}
function totalPrice(){
	totalPriceVar = subtotal + taxes;
	updateHTML();
}

function updateHTML(){
	document.getElementById("proBuildPrice").innerHTML = "$" + proBuildPrice + ".00";
	document.getElementById("shippingandhandlingprice").innerHTML = "$" + shippingandhandlingprice + ".00";
	document.getElementById("extracarepackage").innerHTML = "$" + extracarepackage + ".00";
	document.getElementById("subtotal").innerHTML = "$" + subtotal + ".00";
	document.getElementById("totalPrice").innerHTML = "$" + totalPriceVar + ".00";
}


