  var profilename = document.getElementById("profilename");
	var updateform = document.getElementById("updateform");
	var otherinfo = document.getElementById("otherinfo");
	var editbtn = document.getElementById("editbtn");
	var change_password = document.getElementById("change_password");

function updateprofile() {
	
    profilename.style.display = "none";
	updateform.style.display = "flex";
	otherinfo.style.display = "none";
	editbtn.style.display = "none";
	change_password.style.display = "none";	
}

function cancelprofile(){
	
    profilename.style.display = "flex";
	updateform.style.display = "none";
	otherinfo.style.display = "block";
	editbtn.style.display = "block";
	change_password.style.display = "block";

}

function saveprofile(){
	document.getElementById("updateform").submit();
	window.location.href= "profile.php";
}

var loadFile = function(event) {
	var image = document.getElementById('addprofilephoto');
	image.src = URL.createObjectURL(event.target.files[0]);
}