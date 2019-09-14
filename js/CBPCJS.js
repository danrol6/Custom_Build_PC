var itemPrice = 0;
var subtotal = 0;


window.onload=function(){
	document.getElementById("ChassisHide").style.display='none';
	document.getElementById("FanHide").style.display='none';
	document.getElementById("CPUHide").style.display='none';
	document.getElementById("CFHide").style.display='none';
	document.getElementById("MBHide").style.display='none';
	document.getElementById("RAMHide").style.display='none';
	document.getElementById("VCHide").style.display='none';
	document.getElementById("PSHide").style.display='none';
	document.getElementById("HDDHide").style.display='none';
	document.getElementById("NCHide").style.display='none';
	document.getElementById("OSHide").style.display='none';
}



function displayChassis(){
	var x = document.getElementById("ChassisHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayFan(){
	var x = document.getElementById("FanHide");
    
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayCPU(){
	var x = document.getElementById("CPUHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayCF(){
	var x = document.getElementById("CFHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayMB(){
	var x = document.getElementById("MBHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayRAM(){
	var x = document.getElementById("RAMHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayVC(){
	var x = document.getElementById("VCHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayPS(){
	var x = document.getElementById("PSHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayHDD(){
	var x = document.getElementById("HDDHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayNC(){
	var x = document.getElementById("NCHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("OSHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function displayOS(){
	var x = document.getElementById("OSHide");
    if (x.style.display === "none") {
        x.style.display = "block";
        document.getElementById("ChassisHide").style.display='none';
        document.getElementById("FanHide").style.display='none';
        document.getElementById("CPUHide").style.display='none';
        document.getElementById("CFHide").style.display='none';
        document.getElementById("MBHide").style.display='none';
        document.getElementById("RAMHide").style.display='none';
        document.getElementById("VCHide").style.display='none';
        document.getElementById("PSHide").style.display='none';
        document.getElementById("HDDHide").style.display='none';
        document.getElementById("NCHide").style.display='none';
    } else {
        x.style.display = "none";
    }

}

function submit(){
        var r = window.confirm("Are you sure you want to submit this PC?");
        if(r){
          window.location.href="http://cs.neiu.edu/~cs319_1_fall2018_group6/letsbuildit.php";
        }
    }

