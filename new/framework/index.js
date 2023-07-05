function add_lec() {
    let room=document.getElementById('room').value;
    let lecture=document.getElementById('lecture').value;
    let dr_ass=document.getElementById('dr_ass').value;
    let year=document.getElementById('year').value;
    let sec=document.getElementById('sec').value;
    let from =document.getElementById('from').value;
    let to=document.getElementById('to').value;
    let day=document.getElementById('day').value;

      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

        }
      };
      xhr.open("GET", "add.php?room="+room+"&lecture="+lecture+"&dr_ass="+dr_ass+"&year="+year+"&sec="+sec+"&from="+from+"&to="+to+"&day="+day, true);
      xhr.send();
          reset();
    }
function reset(){
    document.getElementById('room').value=null;
    document.getElementById('lecture').value=null;
    document.getElementById('dr_ass').value=null;
    document.getElementById('year').value=null;
    document.getElementById('sec').value=null;
    document.getElementById('from').value=1;
   document.getElementById('to').value=1;
    document.getElementById('day').value=null;
}

function show() {
 let year= document.getElementById("year_show").value;
 let day= document.getElementById("day_show").value;
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("container").innerHTML=this.responseText ;

      }
    };
    xhr.open("GET", "show.php?year="+year+"&day="+day, true);
    xhr.send();
  }

 let interval= setInterval(show,1000);
 function dr_asst(){
  let x = document.getElementById('sec');
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
  //check if the state of network is ok (200)....200 in network state means ok
  if (this.readyState == 4 && this.status == 200) {
  document.getElementById("dr_ass").innerHTML=this.responseText ;
  }
  };        
  xmlhttp.open("GET", "dr_asst.php?p="+x.value, true);
  xmlhttp.send();
}

show();
dr_asst();

