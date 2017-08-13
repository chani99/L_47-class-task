<?php
// include ('software.php');
// include ('vendor.php');
include ('connect.php');
$buttonValue = ($_REQUEST['q']);
$DB = new connect();
$DB = $DB->getDB();


   
       function insertData($DB, $software){
           $software = new software();
           $software = software->getSoftware();
           
          $DB_insert = $DB->prepare("INSERT INTO l47_software(name, V_id) VALUES(:name, :V_id)");
            $DB_employee->execute(array(
                "name"=>$this->software['name'],
                "V_id"=>$this->software['V_id'],));

                return true;
                    }
       }

if ($buttonValue == "all")  {
    return  innerJoin($DB);
}
else if ($buttonValue == "insert")  {
    
    $name = ($_REQUEST['Program-name']);
    $software = new software($name);

)



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

   


   
       


         

