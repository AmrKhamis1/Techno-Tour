/** function 1 (strong password - line 12) */
/** function 2 (localstorage and sign up - line 62) */
/** function 3 (sign in and submit - line 80) */
/** function 4 & 5 (header more info - line 107 , 110) */
/** function (on and off dr and student radio input - line 116 , 122 ) */


document.onload(scrollTo(0, 0));


//********** strong password function *****************************************************************************************************/
function check() {
    let pass_input = document.getElementById("in6-2").value;
    let massage_output = document.getElementById("strong");
    let symbols = '!@#$%^&*()?/>.<,;\|[]{}+=-_~`';
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
        massage_output.innerHTML = "Strong";
        massage_output.style.color = "rgb(0, 255, 42)";
    } else if (num1 + num2 == 1) {
        massage_output.innerHTML = "Medium ( try to use symbols @%#.)";
        massage_output.style.color = "rgba(255, 255, 255, 0.525)";
    } else if (le1 == 0) {
        massage_output.innerHTML = "";
    } else {
        massage_output.innerHTML = "Very Weak (must be over 8 charcter)";
        massage_output.style.color = "rgb(254, 0, 0)";
    }
} /** end of strong password checker */

/* localstorage and sign up function  ****************************************************************************************************/
function singupinfo() {
    let massage_output = document.getElementById("strong");
    let pass_input = document.getElementById("in6-2").value;
    let em_input = document.getElementById("in5-2").value;
    let fname_input = document.getElementById("in1-2").value;
    let lname_input = document.getElementById("in2-2").value;
    let done = document.getElementById("done");
    let em_inputt = JSON.stringify(em_input);
    let lname_inputt = JSON.stringify(lname_input);
    /**the supmit button won't clicked until the password is strong ***************************************************************************/
    if (massage_output.innerHTML == "Strong") {
        localStorage.setItem(pass_input, em_inputt);
        localStorage.setItem(em_input, fname_input);
        done.innerHTML = "Done";
        done.style.color = "rgb(0, 255, 8)";
    }
}

/* submit sign in data function ***********************************************************************************************************/
function submeitt() {
    let email = document.getElementById("in1-1").value;
    let pass = document.getElementById("in2-1").value;
    localStorage.setItem("1", localStorage.getItem(email));
    let worning = document.getElementById("worning");
    let email1 = '"' + email + '"';
    /** checker email and password in the localstorage and compare it with the sign in information  ******************************************/
    for (let i = 0; i < 10; i++) {
        if (pass == localStorage.key(i)) {
            worning.style.display = "none";
            if (email1 == localStorage.getItem(pass)) {
                window.location.assign("index.html");
                worning.style.display = "none";
            } else {
                worning.style.display = "block";
            }
        }
    }
    if (localStorage.getItem("dr") == "true") {
        localStorage.setItem("2", "Dr");
    } else {
        localStorage.setItem("2", "");
    }
}

let dr_input = document.getElementById("in4-2");
let stu_input = document.getElementById("in3-2");

/* header minu more info ******************************************************************************************************************/
function briclear() {
    let cs_list = document.getElementById("brief");
    cs_list.style.display = "none";
}

function bri() {
    let cs_list = document.getElementById("brief");
    cs_list.style.display = "grid";
}


/**on and off in radio input (dr - student) ************************************************************************************************/
function dron() {
    if (dr_input.checked == true) {
        stu_input.checked = false;
        localStorage.setItem("dr", "true");
    }

}

function stuon() {
    if (stu_input.checked == true) {
        dr_input.checked = false;
        localStorage.setItem("dr", "false");
    }

}