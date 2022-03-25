var today = new Date();
var d = today.getDate();
var m = today.getMonth() + 1;
var y = today.getFullYear();

if (d < 10) {
    d = '0' + d;
}
if (m < 10) {
    m = '0' + m;
} 
today = y + '-' + m + '-' + d;
document.getElementById("dob").setAttribute("max", today);


let pass1 = document.getElementById("pass1");
let pass2 = document.getElementById("pass2");

function matchPass() {
    if (pass1.value != pass2.value) {
        pass2.setCustomValidity("Password tidak sama.");
    } else {
        pass2.setCustomValidity('');
    }
}
pass1.addEventListener('change', matchPass);
pass2.addEventListener('keyup', matchPass);
