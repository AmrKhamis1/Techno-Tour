


function available(date,start,end) {
  let x = document.getElementById("b_Num_rooms");
  if (x !== null) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        x.innerHTML = this.responseText;
      }
    }
    xhr.open("GET", "booking/check avalabile booking.php?date="+date+"&start="+start+"&end="+end, true);
    xhr.send();
  }
} 

function check(){
  let date = document.getElementById("b_date").value;
  let start = document.getElementById("b_start").value;
  let end = document.getElementById("b_end").value;
  available(date+"",start+"",end+"");
}


function duration(){
  let start = document.getElementById("b_start").value;
   document.getElementById("b_end").value=start;
  let end = document.getElementsByClassName('end');
  for(i=0;i<9;i++){
    end[i].style.display = 'block';
  } 
  for(i=0;i<9;i++){
   
   if(i==start-1){
     i+=2;
     
     continue;
   }
   end[i].style.display = 'none';
   
  }
  if(start==9){
    end[8].style.display = 'block';
  }
  

}