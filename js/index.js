function toggleNav() {
	var navL = document.getElementById("nav-left");
	var navR = document.getElementById("nav-right");
	if (navL.style.display == "" && navR.style.display == "") {
		navL.style.display = "block";
		navR.style.display = "block";
	}
	if (navL.style.display == "block" && navR.style.display == "block") {
		navL.style.display = "none";
		navR.style.display = "none";
	}
}