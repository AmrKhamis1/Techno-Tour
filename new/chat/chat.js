
function show(){
    document.getElementById('show').style.display='flex';
}
function close_chat(){
    document.getElementById('show').style.display='none';
}
function start_char(friend) {
      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("show").innerHTML= this.responseText;
        }
      }
      show();
      xhr.open("GET", "chat/index.php?friend="+friend, true);
      xhr.send();
  }