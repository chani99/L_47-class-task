        // function checkValue(buttonValue) {
        //     var type = buttonValue;
        //     if (type == "get" || type == "delete") {
        //         if (document.getElementById("Wid").value != "") {
        //             sendAJAX(type);
        //             document.getElementById("Wid").value = "";

        //         } else {
        //             alert("enter a id of a employee");
        //             document.getElementById("Wmame").value = "";
        //             document.getElementById("startDate").value = "";
        //             document.getElementById("Wid").value = "";

        //         }
        //     } else if ((type == "add") || (type == "update")) {
        //         if ((document.getElementById("Wmame").value != "") && (document.getElementById("startDate").value != "")) {
        //             sendAJAX(type);
        //             document.getElementById("Wmame").value = "";
        //             document.getElementById("startDate").value = "";
        //             document.getElementById("Wid").value = "";

        //         } else {
        //             alert("enter a name and start date of a employee");
        //             document.getElementById("Wmame").value = "";
        //             document.getElementById("startDate").value = "";
        //             document.getElementById("Wid").value = "";

        //         }

        //     }

        // }


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

            // var param = "mainAJAX.php?q=" + type + "&id=" + document.getElementById("Wid").value + "&name=" + document.getElementById("Wmame").value + "&date=" + document.getElementById("startDate").value;
            var param = "softwarAPI.php?q=" + type;
            xhttp.open("GET", param, true);

            xhttp.send();
        }


        function getVendor() {
            sendAJAX('select');
        }