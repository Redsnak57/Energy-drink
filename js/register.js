/* Swipe des formulaires */
var form1 = document.getElementById("form1");
var form2 = document.getElementById("form2");

var next = document.getElementById("next");
var back = document.getElementById("back");
var progress = document.getElementById("progress");

next.onclick = function (){
    form1.style.left = "-450px";
    form2.style.left = "40px";
    progress.style.width = "100%";

}
back.onclick = function (){
    form1.style.left = "40px";
    form2.style.left = "450px";
    progress.style.width = "50%";

}

/* Voir/cacher mdp */
const mdpPass = document.querySelector(".mdpPass");
const toggle = document.querySelector("#oeilPass");

const mdpCpass = document.querySelector(".mdpCpass");
const toggleCpass = document.querySelector("#oeilCpass");

toggle.addEventListener("click", function(){
    if(mdpPass.type == "password"){
        mdpPass.type = "text";
    } else {
        mdpPass.type = "password";
    }
});

toggleCpass.addEventListener("click", function() {
    if(mdpCpass.type == "password"){
        mdpCpass.type = "text";
    } else {
        mdpCpass.type = "password";
    }
});


