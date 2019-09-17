<?php
    
	global $DB;
    
    // Declaring connection variables
    $MYSQL_DRIVER = 'mysql:host=127.0.0.1;dbname=hng_team_codebeasts;';
    $USERNAME = 'root';
    $PASSWORD = '';
    
    try{
        // Establishing connection
        $DB = new PDO($MYSQL_DRIVER, $USERNAME, $PASSWORD);
    }
    catch (PDOException $e) {
        die('Database connection failed ');
    }

?>