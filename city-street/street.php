<?php
require_once ('connection.php');

class street  {
    private $s_name;
    private $C_id;

    function __construct ($s_name, $C_id) {
            $this->s_name = $s_name;
            $this->C_id = $C_id;
            }

function insert($s_name, $C_id) {
            $DB = new connection();
            $DB = $DB->getDB();

          $DB_streets = $DB->prepare("INSERT INTO streets(s_name, C_id)
                VALUES(:s_name, :C_id)");
                $DB_streets->execute(array(
                "s_name"=>$this->s_name,
                "C_id"=>$this->C_id,));
                return true;

}

public static function innerJoin() {
            $DB = new connection();
            $DB = $DB->getDB();
            $innerJion = $DB->prepare("SELECT * FROM streets INNER JOIN cities ON streets.C_id = cities.id");
            $innerJion->execute();

                echo "<table > <tr>
                            <th>street name</th> 
                            <th>city name</th>
                            </tr>";

                while ($row = $innerJion->fetch()) 
                {
                    echo     "<tr>
                                <td>" . $row["s_name"] . "</td>
                                <td>" . $row["city_name"] . "</td> 
                            </tr>";
                            }
                echo "</table>";


               }

   

}