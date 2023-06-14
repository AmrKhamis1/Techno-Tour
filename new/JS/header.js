let logout=document.getElementById('profile');

function logout_show2(){
    if(screen.width<500){
    if(logout.style.marginTop=="19vh"){
        logout.style.marginTop="-80vh";
    }else{
        logout.style.marginTop="19vh";
    }
    }else{
        if(logout.style.marginTop=="11vh"){
            logout.style.marginTop="-60vh";
        }else{
            logout.style.marginTop="11vh";
        }
    }

}
function logout_show(){
    if(screen.width<500){
        if(logout.style.marginTop=="19vh"){
            logout.style.marginTop="-80vh";
        }else{
            logout.style.marginTop="19vh";
        }
        }else{
            if(logout.style.marginTop=="11vh"){
                logout.style.marginTop="-60vh";
            }else{
                logout.style.marginTop="11vh";
            }
        }
    
}
let remove=document.getElementsByTagName('img');
remove.forEach(function(element) {
    if(element.alt=='www.000webhost.com'){
        element.style.display='none';
    }
});