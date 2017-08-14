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
    var id = document.getElementById("selected");
    var name = document.getElementById("name");
    if (id != null) {
        var select = document.getElementById("select");
        id = select.options[select.selectedIndex].value;

    } else {
        id = 0;
    }
    if (name != null) {
        name = document.getElementById("name").value;
    } else {
        name = 0;
    }

    var param = "softwarAPI.php?q=" + type + "&name=" + name + "&id=" + id;
    xhttp.open("GET", param, true);

    xhttp.send();
}


function getVendor() {
    sendAJAX('select');
}