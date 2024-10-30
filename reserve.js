"use strict"

window.onload=pageLoad;
function pageLoad(){
	document.getElementById("submit").onclick=check;
}

function check() {
	var myLot = document.getElementById("LOT").value;

	var pattern1= /^\(\d{2}\)$/;
	var result1 = pattern1.test(myLot);

	if (result1==false)
	{

		alert("The lot ID you entered (" + myLot + ") is not in the correct form. You must enter a two digit number. Even 0x.");
document.getElementById("LOT").select();

	return false;
}
else{
	return true;
}

	var mySpot = document.getElementById("Spot").value;

	var pattern2= /^\(\d{2}\)$/;
	var result2 = pattern2.test(mySpot);

	if (result2==false)
	{

		alert("The spot ID you entered (" + mySpot + ") is not in the correct form. You must enter a two digit number. Even 0x.");
document.getElementById("Spot").select();

	return false;
}
else{
	return true;
}

	var myStart = document.getElementById("start").value;

	var pattern3= /^\(\d{2}\)\d{2}-\d{2}$/;
	var result3= pattern3.test(myStart);

	if (result3 == false) {
		alert("The time you entered (" + myStart + ") is not in the correct format. The correct format is hh-mm-ss. Please go back and fix your start time.");
	document.getElementById("start").select();
	return false;
}
else{
	return true;
}

	var myEnd = document.getElementById("end").value;

	var pattern4= /^\(\d{2}\)\d{2}-\d{2}$/;
	var result4= pattern4.test(myEnd);

	if (result4 == false) {
		alert("The time you entered (" + myEnd + ") is not in the correct format. The correct format is hh-mm-ss. Please go back and fix your end time.");
	document.getElementById("end").select();
	return false;
}
else{
	return true;
}
}