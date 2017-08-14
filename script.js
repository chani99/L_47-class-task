function sendAJAX(type) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (type == 'select') {
                document.getElementById("select").innerHTML = this.responseText;

            } else {
                document.getElementById("result").innerHTML = this.responseText;
            }


        }
    };


    var param = "softwarAPI.php?q=" + type + "&name=" + document.getElementById("name").value + "&id=" + document.getElementById("selected").value;
    xhttp.open("GET", param, true);

    xhttp.send();
}


function getVendor() {
    sendAJAX('select');
}