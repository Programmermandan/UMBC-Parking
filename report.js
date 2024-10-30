"use strict"

window.onload=pageLoad;
function pageLoad(){
	document.getElementById("submit").onclick=check;
}

function check() {

	var mySpot2 = document.getElementById("Spot_Number").value;

	var pattern5= /^\(\d{2}\)$/;
	var result5 = pattern5.test(mySpot2);

	if (result5==false)
	{

		alert("The spot ID you entered (" + mySpot2 + ") is not in the correct form. You must enter a two digit number. Even 0x.");
document.getElementById("Spot_Number").select();

	return false;
}
else{
	return true;
}

var myLot2 = document.getElementById("lot").value;

	var pattern6= /^\(\d{2}\)$/;
	var result6 = pattern6.test(myLot2);

	if (result5==false)
	{

		alert("The lot ID you entered (" + myLot2 + ") is not in the correct form. You must enter a two digit number. Even 0x.");
document.getElementById("lot").select();

	return false;
}
else{
	return true;
}

var myReasons = document.getElementById("Reasoning").value;

	var pattern7= /^[a-z]+\s+[a-z]+$/i;
	var result7 = pattern7.test(myReasons);

	if (result7==false)
	{

		alert("Please fill out this form.");
document.getElementById("Reasoning").select();

	return false;
}
else{
	return true;
}
}