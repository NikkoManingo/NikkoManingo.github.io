  var addpetname = document.getElementById("addpetname");
	var updateform = document.getElementById("updateform");
	var otherinfo = document.getElementById("otherinfo");
	var editbtn = document.getElementById("editbtn");
	var change_password = document.getElementById("change_password");

function updateaddpet() {
	
    addpetname.style.display = "none";
	updateform.style.display = "flex";
	otherinfo.style.display = "none";
	editbtn.style.display = "none";
	change_password.style.display = "none";	
}

function canceladdpet(){
	
    window.location.href= "/MyPets";

}

function saveaddpet(){
	document.getElementById("updateform").submit();
	window.location.href= "addpet.php";
}

var loadFile = function(event) {
	var image = document.getElementById('addpetphoto');
	image.src = URL.createObjectURL(event.target.files[0]);
}