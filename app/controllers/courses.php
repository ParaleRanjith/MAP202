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
            if ($department == null) {
                header("Location:/courses");
            }
            $courseModel = $this->model('Course');

            if ($program) {
                $courses = $courseModel->get_all_courses($program); 
                $this->view('courses/courses',
                [
                    'program' => $program,
                    'courses' => $courses
                ]
                );
                die;
}
            
            $programs = $courseModel->get_all_programs($department);
            
            $this->view('courses/programs',
                [
                    'department' => $department,
                    'programs' => $programs
                ]
                );
            die;
            
        }
}

