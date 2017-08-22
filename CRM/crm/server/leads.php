<?php

require_once ('connection.php');

class leads  {
    private $id;
    private $lead_name;
    private $lead_phone;
    private $product_id;



    function __construct ($lead_name,$lead_phone,$product_id) {
            $this->id = $id;
            $this->lead_name = $lead_name;
            $this->lead_phone = $lead_phone;
            $this->product_id = $product_id;

            }


   public static function GetAllLeads() {
       $DB = new connection();
       $DB = $DB->getDB();
       $leads_obj;

        $leads =  $DB->prepare('SELECT * FROM leads');
        $leads->execute();
        $leadsCount = $leads->rowCount();
        $i = 0;

            echo "[";
                    while ($row = $leads->fetch()) 
            {
                echo "{";

                echo  '"id":';
                echo $row["id"];
                echo ",";

                echo '"lead_name":';
                echo '"';
                echo $row['lead_name'];
                echo '"';
                echo ",";

                echo '"lead_phone":';
                echo $row['lead_phone'];
                echo ",";
                

                echo '"product_id":';
                echo $row['product_id'];


                echo "}";
                if ($leadsCount -1> $i)
                    echo ",";
                $i++;
            }

            echo "]";

        }

        

   }


