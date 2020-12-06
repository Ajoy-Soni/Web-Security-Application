document.getElementById("submit").onclick = function () {
    var input1 = document.getElementById("input-id").value;
    var input2 = document.getElementById("input-comment").value;
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("solution").innerHTML = " ";
            document.getElementById("solution").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "server.php?input1=" + input1 + "&input2=" + input2, true);
    xhttp.send();
}