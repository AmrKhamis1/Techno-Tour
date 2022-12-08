let myVar = setInterval(sen ,0);
      function  sen(){
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  xmlhttp.open("POST","masg.txt");
  xmlhttp.send();}