<?php

require_once ('connection.php');

class products  {
    private $id;
    private $product_name;



    function __construct ($product_name) {
            $this->product_name = $product_name;


            }


   public static function GetAllCustomers() {
       $DB = new connection();
       $DB = $DB->getDB();

        $products = $DB->prepare('SELECT * FROM products');
        $products->execute();
        $productsCount = $products->rowCount();
        $i = 0;

            echo "[";
                    while ($row = $customers->fetch()) 
            {
                echo "{";

                echo  '"id":';
                echo $row["id"];
                echo ",";
                
                echo '"product_name":';
                echo '"';
                echo $row['product_name'];
                echo '"';


                echo "}";
                if ($productsCount -1> $i)
                    echo ",";
                $i++;
            }

            echo "]";

        }

        

   }


