<?php
include ('leads.php');
include ('customers.php');
include ('products.php');
include ('professions.php');
include ('prospects.php');
require_once ('connection.php');
$getvalue = ($_REQUEST['q']);

//    $getvalue='select';
switch ($getvalue) {
    
        case 'select':
        echo leads::GetAllLeads();
        break;

        case 'id':
        $id = ($_REQUEST['id']);
        echo leads::CheckId($id);
        break;

        case 'update':
        $id = ($_REQUEST['id']);
        $name = ($_REQUEST['name']);
        $phone = ($_REQUEST['phone']);
        $product_id = ($_REQUEST['product_id']);
        echo leads::UpdateLead($id, $name, $phone, $product_id);
        break;

        case 'create':
        $name = ($_REQUEST['name']);
        $phone = ($_REQUEST['phone']);
        $product_id = ($_REQUEST['product_id']);
        echo leads::CreateLead($name, $phone, $product_id);
        break;

        case 'delete':
        $id = ($_REQUEST['id']);
        echo leads::DeleteLead($id);
        break;







}





    // case 'all': 
        // return  street::innerJoin();
        // break;

        // case 'insert': 
        // $name = ($_REQUEST['name']);
        // $V_id = ($_REQUEST['id']);

        // $addStreet = new street($name, $V_id);
        // $addStreet = $addStreet->insert($name, $V_id);
        // if ($addStreet) echo "added!";
        // else echo "error!";
        // break;
   
       


         

