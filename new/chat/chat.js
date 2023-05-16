function chat_container(user_id,friend_id) {


      var xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("chat_container").innerHTML = this.responseText;
        }
      };
      xhr.open("GET", "chat/chat.php?user_id="+user_id+"&friend_id="+friend_id, true);
      xhr.send();
      setTimeout(()=>{
        document.getElementById('messages_container').scrollTo(0,10000000);
       },500);
    }
var chating='';
    function chat_message(user_id,friend_id) {
        chating=document.getElementById("messages_container").innerHTML;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("messages_container").innerHTML = this.responseText;
            if(chating.length<document.getElementById("messages_container").innerHTML.length){
                 document.getElementById("messages_container").scrollTo(0,1000000);
            }
          }
          }
        xhr.open("GET", "chat/ajax chat.php?user_id="+user_id+"&friend_id="+friend_id, true);
        xhr.send();
    }
      

      function send(user_id,friend_id) {
      var message = document.getElementById('message');
      if(message.value!=""){
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          }
        };
        xhr.open("GET", "chat/insert.php?user_id="+user_id+"&friend_id="+friend_id+"&message="+message.value, true);
        xhr.send();
      }
        message.value="";
       setTimeout(()=>{
        document.getElementById('messages_container').scrollTo(0,10000000);
       },500); 
      }
      function send_enter(x,y){
     document.getElementById('message').addEventListener('keyup',(e)=>{
             if(e.code=='Enter' && this.value!=''){
                    send(x,y);
             }
     });}
      var interval=0;
      function clear(){
        clearInterval(interval);
      }
      
      function messages(x,y){
       clear(interval);
       interval = setInterval(chat_message,400,x,y)
       setTimeout(()=>{
        document.getElementById('messages_container').scrollTo(0,10000000);
       },500);
      }
