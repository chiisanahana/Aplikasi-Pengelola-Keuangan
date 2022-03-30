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


let photo = document.getElementById("photo");
let photo_label = document.getElementById("choose-photo");
photo.addEventListener('change', function(e) {
    let img = document.getElementById("uploaded-img");
    img.style.display = "block";
    if (photo_label != null) photo_label.style.display = "none";
    img.src = URL.createObjectURL(e.target.files[0]);
})