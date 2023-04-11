


function available(date,start,end) {
    for (let i = 0; i < 37; i++) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("b_Num_rooms").innerHTML = this.responseText;
        }
      };
      xhr.open("GET", "check avalbaile booking.php?date="+date+"&start="+start+"&end="+end, true);
      xhr.send();
    }
  } 
  setInterval(function(){
    let date = document.getElementById("b_date").value;
    let start = document.getElementById("b_start").value;
    let end = document.getElementById("b_end").value;
    available(date,start,end);
},3000);
