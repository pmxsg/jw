
function openContents(evt, Numb) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
tablinks[i].className = tablinks[i].className.replace(" active", "");
}
document.getElementById(Numb).style.display = "block";
evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


function myFunction(d1,e1,f1) {
var dots = document.getElementById(d1);
var moreText = document.getElementById(e1);
var btnText = document.getElementById(f1);

if (dots.style.display === "none") {
dots.style.display = "inline";
btnText.innerHTML = "확인"; 
moreText.style.display = "none";
} else {
dots.style.display = "none";
btnText.innerHTML = "닫기"; 
moreText.style.display = "inline";
}
}
