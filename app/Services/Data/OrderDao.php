<?php
namespace App\Services\Data;

    function addProduct($product){
        $myDB = new DataBase();
        $connection = $myDB->getConnect();
        $sql = "INSERT INTO PRODUCTS (Product_Name) VALUES ('$product')";

        if ($connection->query($sql) === TRUE) {
            // close the connection and then move on to the next page!
            $result = "item added";
        } else {
            // something went wrong
            echo "Error: " . $sql . "<br>" . $connection->error;
            $result = $connection->error;
        }
    }


?>
