var $ = function(id) {
    return document.getElementById(id);
}

function show() {
    $("copyright").style.display="block";
}

function hide() {
    $("copyright").style.display= "none";
}
