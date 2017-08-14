<?php
include ('software.php');
include ('vendor.php');
include ('connect.php');
$getvalue = ($_REQUEST['q']);
$DB = new connect();
$DB = $DB->getDB();


   
switch ($getvalue) {
        case 'all': 
        return  innerJoin($DB);
        break;

        case 'insert': 
        $name = ($_REQUEST['name']);
        $V_id = ($_REQUEST['id']);

        $software = new software($name, $V_id);
        $software = $software->insert($name, $V_id, $DB);
        if ($software) echo "added!";
        else echo "error!";
        break;

        case 'select':
         
        echo Vendor::getVendor($DB);

        break;



}




function innerJoin ($DB) {

                $DB=$DB;
                $DB_homework = $DB->prepare("SELECT l47_software.*,l47_vendor.name as vname FROM l47_software INNER JOIN l47_vendor ON l47_software.V_id = l47_vendor.id");
                $DB_homework->execute();

                echo "<table > <tr>
                            <th>name</th> 
                            <th>vendor name</th>
                            </tr>";

                while ($row = $DB_homework->fetch()) 
                {
                    echo     "<tr>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["vname"] . "</td> 
                            </tr>";
                            }
                echo "</table>";


               }

   


   
       


         

