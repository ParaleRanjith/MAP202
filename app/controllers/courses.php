<?php

class Courses extends Controller {

    public function index() {	
        $courseModel = $this->model('Course');
        $departments = $courseModel->get_all_departments();
        
        
	    $this->view('courses/index',
            [
                'departments' => $departments
            ]
            );
	    die;
        
    }

        public function display ($department = null, $program = null) {

            $courseModel = $this->model('Course');
            $programs = $courseModel->get_all_programs($department);
            
            $this->view('courses/display',
                [
                    'department' => $department,
                    'programs' => $programs
                ]
                );
            die;
            
        }
}