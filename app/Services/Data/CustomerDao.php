<?php
namespace App\Services\Data;

    function addCustomer($firstName, $lastName){
        $myDB = new DataBase();
        $connection = $myDB->getConnect();
        $sql = "INSERT INTO CUSTOMERS (First_Name, Last_Name) VALUES ('$firstName', '$lastName')";

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
