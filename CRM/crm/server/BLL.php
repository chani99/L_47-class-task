<?php
require_once ('connection.php');

class BusinessLogicLayer {

    
// selects all from a table in a DB and returns it as array
    static function SelectAllFromTable($table_name) {
        $DB = new connection();
        $res = $DB->runQuery("SELECT * FROM `".$table_name."`");
     
        return $res;
;

    }

// checks if a id exists on a id row in a DB and returns true or false
static function Check_if_id_exists($table_name, $id) {
        $DB = new connection();
        $DB = $DB->getDB();

        $table =  $DB->prepare("SELECT id FROM ".$table_name." WHERE id='$id'");
        $table->execute();

            if( $table->rowCount() > 0){
            return true;
            }else{
            return false;
            }
    }

 // updates data in a table 
static function update_table($table_name, $id, $updateValues) {
        $DB = new connection();
        $DB = $DB->getDB();
        $update = $DB->prepare("UPDATE ".$table_name." SET ".$updateValues." WHERE id='$id'");
        $update->execute();
        return $update;



}


static function create_new_row($table_name, $column, $values, $exicute) {
        $DB = new connection();
        $DB = $DB->getDB();

        $Create = $DB->prepare("INSERT INTO ".$table_name."(".$column.") VALUES (".$values.")");
        $Create->execute($exicute);



}

static function DeleteRow($table_name, $id) {
        $DB = new connection();
        $DB = $DB->getDB();

        $delete =  $DB->prepare("DELETE FROM ".$table_name." WHERE id =". $id);
        $delete->execute();

}

}