var exit_chat=document.getElementById('exit_chat');
var chat_cont=document.getElementById('chat_container1');

var chat_cont2=document.getElementById('chat_container');

var open_chat=document.getElementById('open_chat');
function close_chat(){
    chat_cont.style.transform='scale(0)';
    chat_cont2.style.transform='scale(0)';
    open_chat.style.transform='scale(1)';
}
function open_chating(){  
    chat_cont2.style.transform='scale(1)';
}
function open_chating2(){  
    chat_cont.style.transform='scale(1)';
    open_chat.style.transform='scale(0)';
}
function close_chat2(){
    chat_cont2.style.transform='scale(0)';

}
open_chat.addEventListener('touchend',open_chating2);

open_chat.addEventListener('click',open_chating2);
