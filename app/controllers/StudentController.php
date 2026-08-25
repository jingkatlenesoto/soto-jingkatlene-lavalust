<?php

namespace App\Controllers;

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION['student_access'] = true;

        $this->call->view('student/homepage');
    }

    public function profile()
    {
        $student = [
            'student_id' => 'MCG2021-00202',
            'name'       => 'Jing Katlene A. Soto',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F5',
            'email'      => 'jingkatlene@gmail.com',
            'address'    => 'Sitio Bibihan, Brgy. Puting Tubig, Calapan City, Oriental Mindoro',
            'contact'    => '09203747743',
            'hobbies'    => 'Watching movies, K-drama, C-drama, dog lover',
        ];

        $this->call->view('student/student_profile', $student);
    }
}