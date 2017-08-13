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
       $selectVendor = "<select id='select'>";

                // while ($row = $vendors->fetch()) 
                // {
                //     $selectVendor += "<option id='" . $row["id"] . "'>" . $row["name"] . "</option>";
                //             }

        // $selectVendor = $selectVendor + "</select>";
        

       return $selectVendor;
   }


}