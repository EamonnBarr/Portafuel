var attempt = 3; // Variable to count number of attempts.

// Below function Executes on click of login button.
function validate(){

var password = document.getElementById("password").value;
if (password == "formget123"){
alert ("Login successfully");
window.location = "aboutme.html"; // Redirecting to page.
return false;
}
else{
attempt --;// Decrement one
alert(""+attempt+"attempts remaining;");
// Disabled after 3 attempts.
if( attempt == 0){

document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}