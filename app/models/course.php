<?php

class Course {

    public function __construct()
    {
        
    }

   public function get_all_courses () {
        $db = db_connect();
        $query = "SELECT * FROM courses";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public function get_all_departments () {
        $db = db_connect();
        $query = "SELECT DISTINCT department FROM courses";
        $stmt = $db->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public function get_all_programs ($department) {
        $db = db_connect();
        $query = "SELECT DISTINCT program FROM courses WHERE department = :department";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':department', $department);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
}

   