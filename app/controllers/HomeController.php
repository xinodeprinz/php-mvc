<?php

namespace App\Controllers;

use App\Models\User;
use Core\Controller;
use Core\Request;

class HomeController extends Controller
{
    protected User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        $data = array(
            'title' => 'Welcome',
            'content' => 'This is the homepage.'
        );
        $users = $this->user->all();
        var_dump($users);
        // return view('home', $data, 'main');
    }

    public function submit(Request $request)
    {
        var_dump($request->all());
        // return back(['error' => 'An error occurred']);
    }
}
