<?php
class software  {
    private $name;
    private $V_id;
    private $software;

    function __construct ($name, $V_id) {
            $this->name = $name;
            $this->V_id = $V_id;
            }

function getSoftware($name, $V_id) {
    $this->software =array($this->name = $name, $this->V_id = $V_id);
    return $this->software;
}


}