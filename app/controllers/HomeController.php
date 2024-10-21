<?php

namespace App\Controllers;

use Core\Controller;
use Core\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Welcome',
            'content' => 'This is the homepage.'
        );
        return view('home', $data, 'main');
    }

    public function submit(Request $request)
    {
        var_dump($request->all());
        // return back(['error' => 'An error occurred']);
    }
}
