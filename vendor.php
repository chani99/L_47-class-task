<?php
class vendor  {
    private $name;


    function __construct ($name) {
            $this->name = $name;
            }


   public static function getVendor ($DB) {
       $DB = $DB;
       $vendors =  $DB->prepare('SELECT * FROM l47_vendor');
       $vendors->execute();

                while ($row = $vendors->fetch()) 
                {
                    echo "<option id='selected' value=" . $row["id"] . "'>" . $row["name"] . "</option>";
                            }

        

   }


}