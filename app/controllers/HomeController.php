<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $data = ['title' => ' Welcome', 'content' => 'This is the homepage.'];
        return $this->view('home', $data);
    }

    public function submit()
    {
        $data = $_POST;
        print_r($data);
    }
}
