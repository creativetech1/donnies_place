<?php
    

function db_connect(){    
    // Variables
    $DB_SERVER = "localhost";
    $DB_USERNAME = "marty123";
    $DB_PASSWORD = "o1wDjasgJQ4j";
    $DB_NAME = "MyRestaurantDB";

    // Create connection
    $db = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

    
    // Test if connection is established
    $status = mysqli_connect_errno();
    
    if ($status) {
        echo '<p>Error: Could not connect to database.<br/>
              Please try again later.</p>';
        echo 'Status is '.mysqli_connect_errno().'<br/>';
        $db = null;
    }

    return $db;

}
?>
