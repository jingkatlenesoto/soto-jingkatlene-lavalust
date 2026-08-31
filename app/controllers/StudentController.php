<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {

    public function index() {
        $this->call->view('student/index');
    }

    public function profile() {
      
        $data['student'] = [
          
            'student_id'        => '2024-00202',
            'name'              => 'Jing katlene A. Soto',
            'profile_pic'       => 'profile.jpg',
            'course'            => 'BS Information Technology',
            'year'              => '3rd Year',
            'section'           => '3F-5',
            'academic_status'   => 'Active',
            
            
            'email'             => 'jingkatlenes@gmail.com',
            'contact_no'        => '09203747743',
            'address'           => 'Mahal Na Pangalan Calapan City ',
            'birthdate'         => '2006-06-28',
            'gender'            => 'Female ',
            
         
            'department'        => 'College of Computer Studies',
            'adviser'           => 'Ronald Marasigan',
            'gpa'               => 'N/A',
            
            
            'skills'            => 'PHP, LavaLust Framework, HTML/CSS, JavaScript, MySQL',
            'hobbies'           => 'sleeping, Watching Short Drama, Love dogs',
            
            
            'emergency_contact' => 'Rene Boy N. Soto (Father)',
            'emergency_no'      => '09092929614',

           
            'github'            => 'https://github.com/jingkatlenesoto/soto-jingkatlene-lavalust',
            
        ];

        
        $this->call->view('student/profile', $data);
    }
}