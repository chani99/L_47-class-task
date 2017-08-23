<?php
require_once ('connection.php');

class BusinessLogicLayer {

    
// selects all from a table in a DB and returns it as array
    static function SelectAllFromTable($table_name) {
        $DB = new connection();
        $DB = $DB->getDB();

        $table =  $DB->prepare("SELECT * FROM `".$table_name."`");
        $table->execute();
        $mytable = array();

        while ($row = $table->fetch()) {
        $mytable[] = $row;
        }

        return $mytable;

    }


static function Check_if_id_exists($table_name, $id) {
        $DB = new connection();
        $DB = $DB->getDB();

        $table =  $DB->prepare("SELECT id FROM `".$table_name."` WHERE id='$id'");
        $table->execute();

            if( $table->rowCount() > 0){
            return true;
            }else{
            return false;
            }
    }
}

?>