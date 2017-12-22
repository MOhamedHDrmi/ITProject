function signupvalid() {
    
    var username = document.forms["signupform"]["username"].value;
    var email = document.forms["signupform"]["email"].value;
    var phonenumber = document.forms["signupform"]["phonenumber"].value;
    var password = document.forms["signupform"]["password"].value;
    var flag = true;
    var filtermail = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var filterpass = /^(?=.*[a - zA - Z])(?=.*\d){8,32}$/;
    var filterphone = /^\(?([0-9]{3})\)?[-]?([0-9]{4})[-]?([0-9]{4})$/;
    if (username == "") {
        document.getElementById('validname').innerText = "*Username require";
        flag = false;
    }
    else if (username.length > 20) {
        document.getElementById('validname').innerText = "*Username too long";
        flag = false;
    }
    else {
        document.getElementById('validname').innerText = "";
        flag = true;
    }

    if(email == ""){
        document.getElementById('validemail').innerText = "*Email require";
        flag = false;
    }
    else if (!filtermail.test(email)){
        document.getElementById('validemail').innerText = "*Email not valid";
        flag = false;
    }
    else{
        document.getElementById('validemail').innerText = "";
        flag = true;
    }

    if (!filterphone.test(phonenumber)) {
        document.getElementById('validphone').innerText = "Invalid Phone number";
        flag = false;
    }
    else {
        document.getElementById('validphone').innerText = "";
        flag = true;
    }

    /*if(password == ""){
        document.getElementById('validpassword').innerText = "*Password require";
        flag = false;
    }else if(!filterpass.test(password)){
        document.getElementById('validpassword').innerText = "*Password should contain upper case,lower case and number";
        flag = false;
    }
    else if(password.length > 32){
        document.getElementById('validpassword').innerText = "*Password too long";
        flag = false;
    }
    else if (password.length < 8) {
        document.getElementById('validpassword').innerText = "*Password too short";
        flag = false;
    }
    else{
        document.getElementById('validpassword').innerText = "";
        flag = true;
    }*/
    
    return flag;
}


function loginvalid(){

}