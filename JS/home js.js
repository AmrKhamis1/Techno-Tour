
let user = document.getElementById("login-logo");
let up = document.getElementById("scrollup");
let close = document.getElementById("close-det");
let det = document.getElementById("det");
let bage1 = document.getElementById("bage1");
let mainnct=document.getElementById("main-nct");
let bage2 = document.getElementById("bage2");

function uni(){
   window.location.assign("index.html");
}

/************************ scroll up fun **************************** */
window.onscroll = function () {
   scrooling();
   scrool_ani();
};

function scrooling() {
   if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
      up.style.display = "flex";
   } else {
      up.style.display = "none";
   }

}
function scrool_ani() {
   var elements = document.querySelectorAll(".animation_go");
   if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.add("no-animation");
      }
   } else {
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove("no-animation");
      }
   }

}
function scrollup() {
   window.scrollTo(0, 0);
}
