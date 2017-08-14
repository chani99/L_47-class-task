<?php
class software  {
    private $name;
    private $V_id;
    private $DB;

    function __construct ($name, $V_id) {
            $this->name = $name;
            $this->V_id = $V_id;
            }

function insert($name, $V_id, $DB) {
            $this->DB = $DB;
          $DB_employee = $DB->prepare("INSERT INTO l47_software(name, V_id)
                VALUES(:name, :V_id)");
            $DB_employee->execute(array(
                "name"=>$this->name,
                "V_id"=>$this->V_id,));
                return true;

}


}