<?php

function db_connect () {
    $dbhost = 'localhost' ;
    $dbname = 'map202_lab' ;
    $dbuser = 'root' ;
    $dbpass = '' ;

    $conn = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass );

    return $conn;
}

  ?>
