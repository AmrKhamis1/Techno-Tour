let logout=document.getElementById('profile');

function logout_show2(){
    if(screen.width<500){
    if(logout.style.marginTop=="19vh"){
        logout.style.marginTop="-70vh";
    }else{
        logout.style.marginTop="15vh";
    }
    }else{
        if(logout.style.marginTop=="15vh"){
            logout.style.marginTop="-65vh";
        }else{
            logout.style.marginTop="15vh";
        }
    }

}
function logout_show(){
    if(screen.width<500){
        if(logout.style.marginTop=="15vh"){
            logout.style.marginTop="-70vh";
        }else{
            logout.style.marginTop="15vh";
        }
        }else{
            if(logout.style.marginTop=="15vh"){
                logout.style.marginTop="-65vh";
            }else{
                logout.style.marginTop="15vh";
            }
        }
    
}