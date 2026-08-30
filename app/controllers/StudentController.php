<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {

    public function index() {
        $this->call->view('student/index');
    }

    public function profile() {
      
        $data['student'] = [
          
            'student_id'        => '2024-00211',
            'name'              => 'Zhann Cyprus Kylle R. Mañibo',
            'profile_pic'       => 'profile.jpg',
            'course'            => 'BS Information Technology',
            'year'              => '3rd Year',
            'section'           => '3F-5',
            'academic_status'   => 'Regular',
            
            
            'email'             => 'zhannmanibo@gmail.com',
            'contact_no'        => '09350039298',
            'address'           => 'Mahal Na Pangalan Calapan City ',
            'birthdate'         => '2006-05-20',
            'gender'            => 'Male ',
            
         
            'department'        => 'College of Computer Studies',
            'adviser'           => 'Ronald Marasigan',
            'gpa'               => 'N/A',
            
            
            'skills'            => 'PHP, LavaLust Framework, HTML/CSS, JavaScript, MySQL',
            'hobbies'           => 'Gaming, Watching Netflix, Do simple task',
            
            
            'emergency_contact' => 'Margie Jane R. Mañibo (Mother)',
            'emergency_no'      => '+63 998 765 4321',

           
            'github'            => 'https://github.com/zhannmanibo-star',
            
        ];

        
        $this->call->view('student/profile', $data);
    }
}