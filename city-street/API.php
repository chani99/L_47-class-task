<?php
include ('city.php');
include ('street.php');
require_once ('connection.php');
$getvalue = ($_REQUEST['q']);


   
switch ($getvalue) {
        case 'all': 
        return  street::innerJoin();
        break;

        case 'insert': 
        $name = ($_REQUEST['name']);
        $V_id = ($_REQUEST['id']);

        $addStreet = new street($name, $V_id);
        $addStreet = $addStreet->insert($name, $V_id);
        if ($addStreet) echo "added!";
        else echo "error!";
        break;

        case 'select':
         
        echo city::GetAllCities();

        break;



}






   
       


         

