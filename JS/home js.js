let f1 = document.getElementById("f1");
let f2 = document.getElementById("f2");
let f3 = document.getElementById("f3");
let f4 = document.getElementById("f4");
let f_btn1 = document.getElementById("f-btn1");
let f_btn2 = document.getElementById("f-btn2");
let f_btn3 = document.getElementById("f-btn3");
let f_btn4 = document.getElementById("f-btn4");
let user = document.getElementById("login-logo");
let up = document.getElementById("scrollup");
let close = document.getElementById("close-det");
let det = document.getElementById("det");
let cube = document.getElementById("cube");
let bage1 = document.getElementById("bage1");
let mainnct=document.getElementById("main-nct");
let bage2 = document.getElementById("bage2");
function home(){
   bage1.style.display="block";
   bage2.style.display="none";

}

function main(){
   bage1.style.display="none";
   bage2.style.display="block";

}
function uni(){
   window.location.assign("index.html");
}
/*****************************  details of every room fun  ****************************** */

/************************ scroll up fun **************************** */
window.onscroll = function () {
   scrooling()
};

function scrooling() {
   if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
      up.style.display = "flex";
   } else {
      up.style.display = "none";
   }

}

function scrollup() {
   window.scrollTo(0, 0);
}

let p = 360;
let rotate = 360;
function next() {
    if(p==90){
      p=450
    }
    p -= 90;
    cube.style.transform = "rotateY("+p+"deg)";
}

function prev() {
    if(p==360){
        p=0
      }
    p += 90;
    cube.style.transform = "rotateY("+p+"deg)";
}

/********************  floors fun  *********************************** */
function floor1() {
   window.scrollTo(0, 700);
   cube.style.transform = "rotateY(360deg)" || "rotateY(0deg)";
   f_btn1.style.opacity = "100%";
   f_btn2.style.opacity = "20%";
   f_btn3.style.opacity = "20%";
   f_btn4.style.opacity = "20%";

}

function floor2() {


   window.scrollTo(0, 700);
   cube.style.transform = "rotateY(270deg)" || "rotateY(-90deg)";
   f_btn1.style.opacity = "20%";
   f_btn2.style.opacity = "100%";
   f_btn3.style.opacity = "20%";
   f_btn4.style.opacity = "20%";
}

function floor3() {
   window.scrollTo(0, 700);
   cube.style.transform = "rotateY(180deg)" || "rotateY(-180deg)";
   f_btn1.style.opacity = "20%";
   f_btn2.style.opacity = "20%";
   f_btn3.style.opacity = "100%";
   f_btn4.style.opacity = "20%";
}

function floor4() {
   window.scrollTo(0, 700);
   cube.style.transform = "rotateY(90deg)" || "rotateY(-270deg)";
   f_btn1.style.opacity = "20%";
   f_btn2.style.opacity = "20%";
   f_btn3.style.opacity = "20%";
   f_btn4.style.opacity = "100%";
}
/**************************************************** */