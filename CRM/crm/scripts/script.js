// AJAX function
function sendAJAX(type) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {
            // return the data to the client acording to the type that was selected
            switch (type) {
                case 'select':
                    var data = JSON.parse(this.responseText);
                    for (let i = 0; i < data.length; i++) {
                        leadsArray.push(new leads(
                            data[i].id,
                            data[i].lead_name,
                            data[i].lead_phone,
                            data[i].product_id
                        ));
                    }
                    creaTable(data);

                    break;
                default:
                    document.getElementById("result").innerHTML = "error";

            }


        }


    }
    var param = "../server/API.php?q=" + type + "&name=" + name + "&id=" + id;
    xhttp.open("GET", param, true);
    xhttp.send();
}




var leadsArray = [];
var id;
var name;
var type;

// function constructor for leads
function leads(id, lead_name, lead_phone, product_id) {
    this.id = id;
    this.lead_name = lead_name;
    this.lead_phone = lead_phone;
    this.product_id = product_id;
}

// function to create a table with all data
function creaTable(data) {
    document.getElementById('result').innerHTML = "";
    var array = data;
    var tableBody = document.getElementById('result');
    var tr = document.createElement('TR');
    tr.setAttribute("id", 'th');
    tableBody.appendChild(tr);
    var keys = Object.keys(array[0]);
    for (i = 0; i < keys.length; i++) {
        var th = document.createElement('TH');
        th.appendChild(document.createTextNode(keys[i]));
        document.getElementById('th').appendChild(th);
    }


    for (i = 0; i < array.length; i++) {
        var tr = document.createElement('TR');
        tr.setAttribute("id", i);
        tableBody.appendChild(tr);

        for (var prop in array[i]) {
            var td = document.createElement('TD');
            td.appendChild(document.createTextNode(array[i][prop]));
            document.getElementById(i).appendChild(td);
        }
    }

}