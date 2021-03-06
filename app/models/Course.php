<?php

class Course {

    public function __construct()
    {
        
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


    public function get_all_courses ($program) {
        $db = db_connect();
        $query = "SELECT courseID, courseName FROM courses WHERE program = :program";
        $stmt = $db->prepare($query);
        $stmt->bindParam(':program', $program);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }
}

   