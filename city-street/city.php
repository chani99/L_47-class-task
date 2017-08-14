<?php

require_once ('connection.php');

class city  {
    private $name;


    function __construct ($name) {
            $this->name = $name;
            }


   public static function GetAllCities() {
       $DB = new connection();
       $DB = $DB->getDB();


       $cities =  $DB->prepare('SELECT * FROM cities');
       $cities->execute();

                while ($row = $cities->fetch()) 
                {
                    echo "<option id='selected' value=" . $row["id"] . "'>" . $row["city_name"] . "</option>";
                }

        

   }


}