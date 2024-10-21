<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'MVC - Home',
            'description' => 'This is the homepage.'
        );
        return view('home', 'main', $data);
    }

    public function create()
    {
        return view('create', 'main');
    }

    public function submit(Request $request)
    {
        var_dump($request->all());
        // return back(['error' => 'An error occurred']);
    }
}
