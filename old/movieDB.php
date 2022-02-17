<?php

include_once ("db.php") ;

class movieDB {



    function get_genres () {
        $conn = db_connect();
        $query = "SELECT DISTINCT genre FROM Movie ORDER BY genre";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

   
    
        
    }
