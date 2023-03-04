function form1(){
    var possitions=document.getElementById("positions");
    var possition=document.getElementById("position"); 
    let fname=document.getElementById('fname');
    let lname=document.getElementById('lname');
    let name =document.getElementById("name");
        name.value=fname.value +" "+lname.value;
        possition.value=possitions.value;
    }

    var email=document.getElementById('email');

 //********** strong password function *****************************************************************************************************/
function form2(){

    var password=document.getElementById('password');
    let pass_input =password.value;
    let massage_output = document.getElementById("strong");
    let symbols = '!@#$%^&*()?/>.<,;\\|[]{}+=-_~`';
    let le1 = pass_input.length;
    let le2 = symbols.length;

    /** this program works as binary 1 and 0   the first if the password is less than 8 char the program have (0 and 0) = 0  *******************/
    /** if the password over 8 char but not have any symbols the program have (1 and 0) or (0 and 1) = 1  **************************************/
    /** if the password have over 8 char and have symbols the program have (1 and 1) = 2  ******************************************************/


    /** first is see if the password over than 8 ..if it true gives 1 and 0 = 1  ***************************************************************/
    if (le1 >= 8) {
        num1 = 1;
        num2 = 0;
        for (let i in pass_input) {
            for (let j in symbols) {
                /** second if sees if the password over 8 char and have symbols to give 1 and 1 = 2  ********************************************************/
                if (pass_input[i] == symbols[j]) {

                    num1 = 1;
                    num2 = 1;
                    break;
                }
            }
        }
    }
    /** thired for the password if it is less than 8 the gives 0 and 0 = 0  *********************************************************************/
    else {
        num1 = 0;
        num2 = 0;
    }
    if (num1 + num2 == 2) {
        massage_output.innerHTML = "| Strong";
        massage_output.style.color = "rgb(0, 255, 42)";
        massage_output.style.fontSize="10px";
    } else if (num1 + num2 == 1) {
        massage_output.innerHTML = "| Medium ( try to use symbols @%#.)";
        massage_output.style.color = "rgba(1, 1, 1, 0.525)";
        massage_output.style.fontSize="10px";
    } else if (le1 == 0) {
        massage_output.innerHTML = "";
    } else {
        massage_output.innerHTML = "| Very Weak (must be over 8 charcter)";
        massage_output.style.color = "red";
        massage_output.style.fontSize="10px";
    }
}
 function form3(){
    var vpassword =document.getElementById("vpassword");
    var worning =document.getElementById('Worning'); 
    let pass_input = document.getElementById('password').value;  
    if(vpassword.value==pass_input){
        worning.innerHTML="  &#10004";
        worning.style.color="rgb(0, 255, 42)";
        worning.style.fontSize="13px";
    }else{
        worning.innerHTML="  &#10006";
        worning.style.color="red";
        worning.style.fontSize="13px";

    }

}
