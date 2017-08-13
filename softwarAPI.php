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
        $name = ($_REQUEST['Program-name']);
        $software = new software($name);
        break;

        case 'select':
         
        $vendor = Vendor::getVendor($DB);
        return $vendor;

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

   


   
       


         

