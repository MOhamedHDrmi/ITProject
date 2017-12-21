function valid() {
    var email = document.forms["loginform"]["email"];
    var password = document.forms["loginform"]["password"];
    var flag = 0;
    if (first.value == "") {
        document.getElementById('validemail').innerText = "Email is empty\n";
        flag = 1;
    }
    else {
        document.getElementById('validemail').innerText = "";
    }
    if (last.value == "") {
        document.getElementById('validpassword').innerText = "Password is empty\n";
        flag = 1;
    }
    else {
        document.getElementById('validpassword').innerText = "";
    }
    if(flag==1){
        return false;
    }
    return true;
}
