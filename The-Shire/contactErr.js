var $ = function(id) {
    return document.getElementById(id);
}

var submitFeed = function() {
    var fname = $("feedName").value;
    var email = $("feedEmail").value;
    var message = $("feedMessage").value;
    var error1 = $("req1");
    var error2 = $("req2");
    var error3 = $("req3");

    if (fname.length < 5) {
        error1.textContent = "Name must be at least 6 characters long";
    }
    else {
        error1.textContent = "*";
    }

    if (!(email.includes("@"))) {
        error2.textContent = "Please enter a valid email";
    }
    else {
        error2.textContent = "*";
    }

    if (message.length < 2) {
        error3.textContent = "Feedback must be at least 2 characters";
    }
    else {
        error3.textContent = "*";
    }

    if(error1.textContent == "*" && error2.textContent == "*" && error3.textContent == "*") {
        $("feedbackForm").submit();
        error1.textContent = "*";
        error3.textContent = "*";
        error3.textContent = "*";
    }
    
}

window.onload = function() {
    $("contactButton").onclick = submitFeed;
}