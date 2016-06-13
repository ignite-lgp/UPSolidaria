function changeInfo(){
	var x, y;
	// Hide original contents
	x =	document.getElementsByClassName("group-section");
	y =	document.getElementsByClassName("group-section-add-activity");

	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	for (i = 0; i < y.length; i++) {
		y[i].style.display = "none";
	}
	// Show new contents
	x =	document.getElementsByClassName("group-section-change-info");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "block";
	}
}

function addActivity(){
	var x, y;
	// Hide original contents
	x =	document.getElementsByClassName("group-section");
	y = document.getElementsByClassName("group-section-change-info");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	for (i = 0; i < y.length; i++) {
		y[i].style.display = "none";
	}
	// Show new contents
	x =	document.getElementsByClassName("group-section-add-activity");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "block";
	}
}