<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Welcome',
            'content' => 'This is the homepage.'
        );
        return $this->view('home', $data, 'main');
    }

    public function submit()
    {
        $data = $_POST;
        print_r($data);
        return $this->back(['success' => 'Form submitted successfully']);
    }
}
