// returns the dom element with specified id
var $ = function(id) {
    return document.getElementById(id);
}

var resetData = function() {
    $("fname").value= "";
    $("lname").value = "";
    $("email").value = "";
    $("pass").innerHTML= "";
    $("confirmpass").innerHTML= "";
    $("nameErr").innerHTML = "*";
    $("emailErr").innerHTML = "*";
    $("passErr").innerHTML = "*";
    $("passMatchErr").innerHTML = "*";
}

var createAcc = function() {
    //reading input
    var fname = $("fname").value;
    var email = $("email").value;
    var pass = $("pass").value;
    var confirmPass = $("confirmpass").value;

    var nameErr = $("nameErr");
    var emailErr = $("emailErr");
    var passErr = $("passErr");
    var passMatchErr = $("passMatchErr");

     nameErr.textContent = "*";
     emailErr.textContent = "*";
     passErr.textContent = "*";
     passMatchErr.textContent = "*";

    //error checking
    if (fname.length < 2)  {
        nameErr.textContent = "First Name must be at least 2 characters long";
    } else {
        nameErr.textContent = "*";
    }

    if (!(email.includes("@")) || email=="") {
        emailErr.textContent = "Please enter a valid e-mail address";
    } else {
        emailErr.textContent = "*";
    }

    if ((pass.length < 6) || pass == "" ) {
        passErr.textContent ="Password must be at least 6 characters long";
    } else {
        passErr.textContent = "*";
    }

    if (pass != confirmPass) {
        passMatchErr.textContent = "Passwords must match!";
    } else {
        passMatchErr.textContent = "*";
    }

    if (nameErr.textContent == "*" && emailErr.textContent == "*" && passErr.textContent == "*" && passMatchErr.textContent == "*") {
        $("nameErr").textContent = "";
        $("emailErr").textContent = "";
        $("passErr").textContent = "";
        $("passMatchErr").textContent = "";
        $("createAccount").submit();
    }
}

window.onload= function () {
    $("create").onclick = createAcc;
    $("reset").onclick = resetData;
}