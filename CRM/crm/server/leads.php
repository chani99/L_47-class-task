<?php

include ('BLL.php');

class leads  {

    private $id;
    private $lead_name;
    private $lead_phone;
    private $product_id;

    public static $table_name = 'leads';


    function __construct ($lead_name,$lead_phone,$product_id) {
            $this->id = $id;
            $this->lead_name = $lead_name;
            $this->lead_phone = $lead_phone;
            $this->product_id = $product_id;

            }


   public static function GetAllLeads() {
        $leads =  BusinessLogicLayer::SelectAllFromTable(self::$table_name);
        echo json_encode($leads);

        }


    public static function CheckId($id){
            $exists = BusinessLogicLayer::Check_if_id_exists(self::$table_name, $id);
            if ($exists == true) {
                echo 'true';
            }
            else {
            echo 'false';
            }

   }


       public static function UpdateLead($id, $name, $phone, $product_id){
            $updateValues= "lead_name = '$name' , lead_phone =  $phone , product_id = $product_id";

           $update = BusinessLogicLayer::update_table(self::$table_name, $id, $updateValues);
            if ($update == true) {
            echo 'Lead was updated successfully';
            }
            else {
            echo 'error';
            }
}


public static function CreateLead($name, $phone, $product_id){
            $column="lead_name, lead_phone, product_id";
            $values=":lead_name, :lead_phone, :product_id";
            $exicute = array(
                "lead_name"=>$name,
                "lead_phone"=>$phone,
                "product_id"=>$product_id);

            $update = BusinessLogicLayer::create_new_row(self::$table_name, $column, $values, $exicute);



}

public static function DeleteLead($id) {
        $deleted =  BusinessLogicLayer::DeleteRow(self::$table_name, $id);
            if ($deleted == true) {
            echo "Lead $id was Deleted successfully";
            }
            else {
            echo 'Error';
            }



}

}