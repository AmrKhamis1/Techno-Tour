function check(forr, room) {

      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('message').innerHTML = this.responseText;
            if(this.responseText=='OK'){
                document.getElementById('message').style.color='green';
                document.getElementById('done').style.display='block';

            }else{
                document.getElementById('message').style.color='red';
                document.getElementById('done').style.display='none';
            }
        }
      }
      xhr.open("GET", "booking/chack avilable booking dr.php?for="+forr+"&room="+room, true);
      xhr.send();
    }
  