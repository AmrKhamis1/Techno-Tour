var exit_chat=document.getElementById('exit_chat');
var chat_cont=document.getElementById('chat_container');
var open_chat=document.getElementById('open_chat');
function close_chat(){
    chat_cont.style.transform='scale(0)';
    open_chat.style.transform='scale(1)';
}
function open_chating(){  
    chat_cont.style.transform='scale(1)';
    open_chat.style.transform='scale(0)';
}

