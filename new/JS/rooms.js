

function show(){
    let add_event = document.getElementById('add-event');
    if(add_event.style.display=="flex"){
      add_event.style.display="none";
    }else{
      add_event.style.display="flex";
    }
  }
  function reports(){
      if( document.getElementById("department").value=='1'){
        document.getElementById("report_det").style.display='inline-block';
        document.getElementById("number_of").style.display='inline-block';
        document.getElementById("else").style.display='none';
        document.getElementById("lable_number").innerHTML='Number Of PCs : ';
        document.getElementById("lable_number").style.display='inline-block';
       }
       else if(document.getElementById("department").value=='3'){
        document.getElementById("report_det").style.display='inline-block';
        document.getElementById("number_of").style.display='inline-block';
        document.getElementById("else").style.display='none';
        document.getElementById("lable_number").innerHTML='Number Of PCs : ';
        document.getElementById("lable_number").style.display='inline-block';
       }
       else if(document.getElementById("department").value=='4'){
        document.getElementById("report_det").style.display='inline-block';
        document.getElementById("number_of").style.display='none';
        document.getElementById("else").style.display='inline-block';
        document.getElementById("lable_number").style.display='none';
       }
       else{
        document.getElementById("report_det").style.display='none';
       }
      }
function event_display(x){
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
//check if the state of network is ok (200)....200 in network state means ok
if (this.readyState == 4 && this.status == 200) {
document.getElementById("show").innerHTML=this.responseText ;
}
};
show();

xmlhttp.open("GET", "rooms/show rooms det.php?room_number="+x, true);
xmlhttp.send();
}
  const roomss = ["A106", "A105", "A104", "A103", "A108", "A107", "A101", "A102", "A207", "A206", "A205", "A204", "A203", "A210", "A209", "A208", "A201", "A202", "A307", "A306", "A305", "A304", "A303", "A310", "A309", "A308", "A301", "A302", "A407", "A406", "A405", "A404", "A403", "A409", "A408", "A401", "A402"];

function available() {

  for (let i = 0; i < 37; i++) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("div" + roomss[i]).innerHTML = this.responseText;
      }
    };
    xhr.open("GET", "rooms/avalable now.php?Room_Num=div" + roomss[i], true);
    xhr.send();
  }
}
function available_colors() {
  for (let i = 0; i < 37; i++) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("div" + roomss[i]).style.backgroundColor = this.responseText;
      }
    };
    xhr.open("GET", "rooms/avalable colors.php?Room_Num=div" + roomss[i], true);
    xhr.send();
  }
}
function book_out_dated() {
  for (let i = 0; i < 37; i++) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
      }
    };
    xhr.open("GET", "booking/booking out dated check.php?Room_Num=div" + roomss[i], true);
    xhr.send();
  }
}
function all(){
  available_colors();
  available();
}
window.onload=function(){
  book_out_dated();
  setInterval(all,60000);
  all();

  const box = document.querySelector('.body');
  
  box.classList.add('animate');
  box.addEventListener('load',()=>{
    box.classList.add('animate');
  });

}  


function show_book(x){
  var book=document.getElementById('book_button'+x);
  if(book){
    book.style.marginBottom='0px';
  }
  
   }
function hide_book(x){
  var book=document.getElementById('book_button'+x);
  if(book){
    book.style.marginBottom='-200px';
  }
} 



