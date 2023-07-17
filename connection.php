<?php

    $database= new mysqli("localhost","root","","bhcas");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>