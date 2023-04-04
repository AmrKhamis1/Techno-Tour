function event_display(){
    let add_event = document.getElementById('add-event');
    if(add_event.style.display=="flex"){
      add_event.style.display="none";
    }else{
      add_event.style.display="flex";
    }
  }
  var xmlhttp = new XMLHttpRequest();
function show_room_det(x){

xmlhttp.onreadystatechange = function() {
//check if the state of network is ok (200)....200 in network state means ok
if (this.readyState == 4 && this.status == 200) {
document.getElementById("show").innerHTML=this.responseText ;
}
};
event_display();
xmlhttp.open("GET", "show rooms det.php?room_number="+x, true);
xmlhttp.send();
}